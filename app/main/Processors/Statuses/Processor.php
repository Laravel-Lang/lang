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
            $this->ensureLocale($locale);

            foreach ($this->files() as $file) {
                $target_path = $this->getTargetPath($locale . $this->extension);

                $this->process($target_path, $file, $locale);
            }
        }
    }

    protected function process(string $target_path, string $filename, string $locale = null): void
    {
        $corrected = $this->resolveFilename($filename, $locale);

        $source = $this->source($filename);
        $target = $this->target($locale, $corrected);

        $is_validation = $this->isValidation($filename);

        $this->addCount($source);

        if ($diff = $this->compare($source, $target, $locale, $is_validation)) {
            $this->pushLocale($locale, $corrected, $diff);

            $this->addCount($diff, 'diff');
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

        $items = Arr::sort($files, function (string $a, string $b) {
            $sorter = Sorter::defaultCallback();

            return $sorter($a, $b);
        });

        $php  = array_filter($items, fn ($value) => ! $this->isJson($value));
        $json = array_filter($items, fn ($value) => $this->isJson($value));

        return $this->source_files = array_merge(array_values($php), array_values($json));
    }

    protected function target(string $locale, string $filename): array
    {
        $corrected = $this->resolveFilename($filename, $locale);

        $path = $this->getLocalePath($locale . '/' . $corrected);

        return $this->load($path);
    }

    protected function pushLocale(string $locale, string $filename, array $diff): void
    {
        $this->locales[$locale][$filename] = $diff;
    }

    protected function ensureLocale(string $locale): void
    {
        if (! isset($this->locales[$locale])) {
            $this->locales[$locale] = [];
        }
    }

    protected function ensureDirectory(): void
    {
        //
    }
}
