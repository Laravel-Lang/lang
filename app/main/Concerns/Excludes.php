<?php

namespace LaravelLang\Development\Concerns;

use DragonCode\PrettyArray\Services\File as PrettyFile;
use DragonCode\Support\Facades\Filesystem\File;

/** @mixin \LaravelLang\Development\Processors\Processor */
trait Excludes
{
    protected static array $excludes = [];

    protected function hasExclude(string $value, string $locale): bool
    {
        return $this->hasExcludeValue($locale, $value)
               || $this->hasExcludeValue('_all', $value);
    }

    protected function hasExcludeValue(string $key, string $value): bool
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
