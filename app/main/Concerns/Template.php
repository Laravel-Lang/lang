<?php

namespace LaravelLang\Development\Concerns;

use DragonCode\Support\Facades\Helpers\Str;

trait Template
{
    protected static array $templates = [];

    protected function template(string $filename, array $values = [], bool $trim = false, bool $return_empty = false): string
    {
        $template = $this->getTemplate($filename, $trim);

        $values = array_merge($this->extend ?? [], $values);

        return $this->replace($template, $values, $return_empty);
    }

    protected function replace(string $template, array $values, bool $return_empty = false): string
    {
        return $return_empty ? '' : Str::replace($template, $values, '{{%s}}');
    }

    protected function getTemplate(string $filename, bool $trim = false): string
    {
        if (static::$templates[$filename] ?? false) {
            return static::$templates[$filename];
        }

        $template = file_get_contents($this->templatePath($filename));

        return static::$templates[$filename] = $trim ? trim($template) : $template;
    }

    protected function templatePath(string $filename): string
    {
        return $this->app->resourcePath($filename);
    }
}
