<?php

namespace LaravelLang\Lang\Concerns;

use Helldar\PrettyArray\Services\File as PrettyFile;
use Helldar\Support\Facades\Helpers\Filesystem\File;

/** @mixin \LaravelLang\Lang\Processors\Processor */
trait Excludes
{
    protected static array $excludes = [];

    protected function hasExclude(string $key, string $locale): bool
    {
        return in_array($key, $this->getExcludes($locale), true) || in_array($key, $this->getExcludes(), true);
    }

    protected function getExcludes(string $locale = null): array
    {
        $locale = $locale ?: '_all';

        $path = $this->app->excludePath($locale);

        if (static::$excludes[$locale] ?? false) {
            return static::$excludes[$locale];
        }

        return static::$excludes[$locale] = File::exists($path) ? PrettyFile::make()->load($path) : [];
    }
}
