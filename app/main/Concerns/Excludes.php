<?php

namespace LaravelLang\Lang\Concerns;

use Helldar\PrettyArray\Services\File as PrettyFile;
use Helldar\Support\Facades\Helpers\Filesystem\File;

/** @mixin \LaravelLang\Lang\Processors\Processor */
trait Excludes
{
    protected static array $excludes = [];

    protected function hasExclude(string $value, string $locale): bool
    {
        return $this->hasExcludeKey($locale, $value)
            || $this->hasExcludeKey('_all', $value);
    }

    protected function hasExcludeKey(string $key, string $value): bool
    {
        $excludes = $this->getExcludes($key);

        return in_array($value, $excludes, true);
    }

    protected function getExcludes(string $key): array
    {
        $path = $this->app->excludePath($key);

        if (static::$excludes[$key] ?? false) {
            return static::$excludes[$key];
        }

        return static::$excludes[$key] = File::exists($path) ? PrettyFile::make()->load($path) : [];
    }
}
