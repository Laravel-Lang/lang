<?php

namespace LaravelLang\Lang\Concerns;

use Helldar\Support\Facades\Helpers\Str;

trait Contains
{
    protected function isJson(string $filename): bool
    {
        return Str::contains($filename, 'json');
    }

    protected function isPhp(string $filename): bool
    {
        return ! $this->isJson($filename);
    }

    protected function isValidation(string $filename): bool
    {
        return Str::contains($filename, 'validation');
    }
}
