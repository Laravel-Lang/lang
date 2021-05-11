<?php

namespace LaravelLang\Lang\Processors\Statuses;

use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Tools\Sorter;
use LaravelLang\Lang\Concerns\Countable;
use LaravelLang\Lang\Concerns\Excludes;
use LaravelLang\Lang\Concerns\Template;
use LaravelLang\Lang\Facades\Arr as ArrHelper;
use LaravelLang\Lang\Processors\Processor as BaseProcessor;

use function PHPUnit\Framework\returnArgument;

abstract class Processor extends BaseProcessor
{
    use Countable;
    use Excludes;
    use Template;

    protected string $extension = '.md';

    protected string $target_path = 'statuses';

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

    protected function process(string $target_path, string $filename, string $locale = null): void
    {
        $corrected = $this->getCorrectedFilename($filename, $locale);

        $source = $this->source($filename);
        $target = $this->target($locale, $corrected);

        $is_validation = $this->isValidation($filename);

        $this->addCount($source);

        if ($diff = $this->compare($source, $target, $locale, $is_validation)) {
            $key = $this->getFileBasename($corrected);

            $this->locales[$locale][$key] = $diff;

            $this->addCount($diff, 'diff');
        } else {
            $this->locales[$locale] = [];
        }
    }

    protected function compare(array $source, array $target, string $locale, bool $is_validation): array
    {
        $source = $this->prepareComparing($source, $is_validation);
        $target = $this->prepareComparing($target, $is_validation);

        return array_filter($target,
            fn ($value, $key) => $this->hasEquals($value, $key, $source, $locale, $is_validation),
            ARRAY_FILTER_USE_BOTH
        );
    }

    protected function prepareComparing(array $array, bool $is_validation): array
    {
        if ($is_validation) {
            $array = Arr::except($array, ['custom', 'attributes']);
        }

        return ArrHelper::flatten($array);
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

    protected function getLocalePath(string $locale = null): string
    {
        return $this->app->localePath($locale);
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
        return Directory::names($this->getLocalePath());
    }

    protected function files(): array
    {
        if (! empty($this->source_files)) {
            return $this->source_files;
        }

        $files = File::names($this->getSourcePath());

        return $this->source_files = Arr::sort($files, function (string $a, string $b) {
            if ($a === $b) {
                return 0;
            }

            if ($this->isJson($a)) {
                return 1;
            }

            $sorter = Sorter::defaultCallback();

            return $sorter($a, $b);
        });
    }

    protected function target(string $locale, string $filename): array
    {
        $corrected = $this->getCorrectedFilename($filename, $locale);

        $path = $this->getLocalePath($locale . '/' . $corrected);

        return $this->load($path);
    }

    protected function ensureDirectory(): void
    {
        //
    }
}
