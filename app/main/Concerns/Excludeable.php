<?php

namespace LaravelLang\Lang\Concerns;

use Helldar\PrettyArray\Services\File as PrettyFile;
use Helldar\Support\Facades\Helpers\Filesystem\File;

/** @mixin \LaravelLang\Lang\Processors\Processor */
trait Excludeable
{
    protected array $excludes = [];

    protected function hasExclude(string $key, string $locale): bool
    {
        return in_array($key, $this->getExcludes($locale)) || in_array($key, $this->getExcludes());
    }

    protected function getExcludes(string $locale = null): array
    {
        $locale = $locale ?: '_all';

        $path = $this->app->excludePath($locale);

        if ($this->excludes[$locale] ?? false) {
            return $this->excludes[$locale];
        }

        return $this->excludes[$locale] = File::exists($path) ? PrettyFile::make()->load($path) : [];
    }
}
