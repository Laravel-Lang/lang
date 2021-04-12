<?php

namespace LaravelLang\Lang\Concerns;

trait Contains
{
    protected function isJson(string $filename): bool
    {
        return str_ends_with($filename, 'json');
    }

    protected function isPhp(string $filename): bool
    {
        return ! $this->isJson($filename);
    }

    protected function isValidation(string $filename): bool
    {
        return str_starts_with($filename, 'validation');
    }
}
