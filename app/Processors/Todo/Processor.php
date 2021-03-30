<?php

namespace LaravelLang\Lang\Processors\Todo;

use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Helpers\Str;
use Helldar\Support\Facades\Tools\Sorter;
use LaravelLang\Lang\Contracts\Filesystem;
use LaravelLang\Lang\Processors\Processor as BaseProcessor;
use LaravelLang\Lang\Services\Filesystem\Base;
use LaravelLang\Lang\Services\Filesystem\Json as JsonFilesystem;
use LaravelLang\Lang\Services\Filesystem\Php as PhpFilesystem;

abstract class Processor extends BaseProcessor
{
    protected string $extension = '.md';

    protected string $target_path = 'todo';

    /** @var \LaravelLang\Lang\Contracts\Filesystem[]|array */
    protected array $filesystems = [];

    protected array $source_files = [];

    protected array $result = [];

    abstract protected function save(): void;

    public function run(): void
    {
        $this->handle();
        $this->save();
    }

    protected function handle(): void
    {
        foreach ($this->locales() as $locale) {
            foreach ($this->files() as $file) {
                $target_path = $this->getTargetPath($locale . $this->extension);

                $this->process($target_path, $file, $locale);
            }
        }
    }

    protected function process(string $target_path, string $filename, string $locale): void
    {
        $source = $this->source($filename);
        $target = $this->target($locale, $this->getCorrectedFilename($filename, $locale));

        $is_validation = $this->isValidation($filename);

        if ($diff = $this->compare($source, $target, $is_validation)) {
            $key = $this->getFileBasename($filename);

            $this->result[$locale][$key] = array_values($diff);
        }
    }

    protected function compare(array $source, array $target, bool $is_validation): array
    {
        return array_filter($target, static function ($value, $key) use ($source, $is_validation) {
            if ($is_validation && in_array($key, ['custom', 'attributes'])) {
                return false;
            }

            return Arr::get($source, $key) === $value;
        }, ARRAY_FILTER_USE_BOTH);
    }

    protected function countMissing(string $locale): int
    {
        $items = array_map(static function (array $items) {
            return count($items);
        }, $this->result[$locale]);

        return array_sum($items);
    }

    protected function load(string $path): array
    {
        return $this->getFilesystem($path)->load($path);
    }

    protected function loadFilesystem(Filesystem|Base|string $filesystem): Filesystem
    {
        return $filesystem::make()->application($this->app);
    }

    protected function getFilesystem(string $filename): Filesystem
    {
        $class = $this->getFilesystemClass($filename);

        if ($this->filesystems[$class] ?? false) {
            return $this->filesystems[$class];
        }

        return $this->filesystems[$class] = $this->loadFilesystem($class);
    }

    protected function getFilesystemClass(string $path): string
    {
        return $this->isJson($path) ? JsonFilesystem::class : PhpFilesystem::class;
    }

    protected function getLangPath(string $locale = null): string
    {
        $locale = $this->app->cleanPath($locale);

        return $this->app->path('src/' . $locale);
    }

    protected function getFileBasename(string $filename): string
    {
        return pathinfo($filename, PATHINFO_FILENAME);
    }

    protected function getCorrectedFilename(string $filename, string $locale): string
    {
        return $this->isJson($filename) ? $locale . '.json' : $filename;
    }

    protected function locales(): array
    {
        return Directory::names($this->getLangPath());
    }

    protected function files(): array
    {
        if (! empty($this->source_files)) {
            return $this->source_files;
        }

        $files = File::names($this->getSourcePath());

        return $this->source_files = Arr::sort($files, static function (string $a, string $b) {
            if ($a === $b) {
                return 0;
            }

            if (Str::endsWith($a, '.json')) {
                return 1;
            }

            $sorter = Sorter::defaultCallback();

            return $sorter($a, $b);
        });
    }

    protected function target(string $locale, string $filename): array
    {
        $path = $this->isJson($filename)
            ? $this->app->path('json/' . $filename)
            : $this->app->path('src/' . $locale . '/' . $filename);

        return $this->load($path);
    }

    protected function isJson(string $filename): bool
    {
        return Str::endsWith($filename, '.json');
    }
}
