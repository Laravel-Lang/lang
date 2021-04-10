<?php

namespace LaravelLang\Lang\Concerns;

use Helldar\Support\Facades\Helpers\Str;

trait Contains
{
    protected function isJson(string $filename): bool
    {
        return Str::endsWith($filename, '.json');
    }

    protected function isValidation(string $filename): bool
    {
        return Str::startsWith($filename, 'validation');
    }
}
