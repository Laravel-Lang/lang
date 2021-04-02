<?php

namespace LaravelLang\Lang\Processors\Todo;

use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Helpers\Str;
use Helldar\Support\Facades\Tools\Sorter;
use LaravelLang\Lang\Concerns\Excludeable;
use LaravelLang\Lang\Concerns\Template;
use LaravelLang\Lang\Contracts\Filesystem;
use LaravelLang\Lang\Processors\Processor as BaseProcessor;
use LaravelLang\Lang\Services\Filesystem\Base;
use LaravelLang\Lang\Services\Filesystem\Json as JsonFilesystem;
use LaravelLang\Lang\Services\Filesystem\Php as PhpFilesystem;

abstract class Processor extends BaseProcessor
{
    use Excludeable;
    use Template;

    protected string $extension = '.md';

    protected string $target_path = 'todo';

    /** @var \LaravelLang\Lang\Contracts\Filesystem[]|array */
    protected array $filesystems = [];

    protected array $source_files = [];

    protected array $locales = [];

    abstract protected function saving(): void;

    public function run(): void
    {
        $this->ensureDirectory();
        $this->handle();
        $this->saving();
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
        $corrected = $this->getCorrectedFilename($filename, $locale);

        $source = $this->source($filename);
        $target = $this->target($locale, $corrected);

        $is_validation = $this->isValidation($filename);

        if ($diff = $this->compare($source, $target, $locale, $is_validation)) {
            $key = $this->getFileBasename($corrected);

            $this->locales[$locale][$key] = $diff;
        } else {
            $this->locales[$locale] = [];
        }
    }

    protected function save(string $path, array|string $content): void
    {
        $content = is_string($content) ? $content : implode(PHP_EOL, $content);

        File::store($path, $content);
    }

    protected function compare(array $source, array $target, string $locale, bool $is_validation): array
    {
        return array_filter($target,
            fn ($value, $key) => $this->hasEquals($value, $key, $source, $locale, $is_validation),
            ARRAY_FILTER_USE_BOTH
        );
    }

    protected function hasEquals($value, $key, array $source, string $locale, bool $is_validation): bool
    {
        if ($is_validation && in_array($key, ['custom', 'attributes'], true)) {
            return false;
        }

        if ($this->hasExclude($key, $locale)) {
            return false;
        }

        return Arr::get($source, $key) === $value;
    }

    protected function countMissing(string $locale): int
    {
        $items = array_map(static fn (array $items) => count($items), $this->locales[$locale]);

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
        $flag = $this->isJson($filename) ? PATHINFO_EXTENSION : PATHINFO_FILENAME;

        return pathinfo($filename, $flag);
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

    protected function link(?string $value): string
    {
        return empty($value) ? '' : sprintf('todo/%s.md', Str::slug($value));
    }

    protected function replace(string $template, array $values, bool $return_empty = false): string
    {
        return $return_empty ? '' : Str::replace($template, $values, '{{%s}}');
    }

    protected function ensureDirectory(): void
    {
        //
    }
}
