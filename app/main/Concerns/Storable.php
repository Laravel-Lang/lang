<?php

namespace LaravelLang\Development\Concerns;

use DragonCode\Support\Facades\Instances\Instance;
use DragonCode\Support\Tools\Stub;
use LaravelLang\Development\Contracts\Stringable;

trait Storable
{
    protected ?string $stub = null;

    protected function prepareToStore(array|string|Stringable $content): string
    {
        if (Instance::of($content, Stringable::class)) {
            return $content->toString();
        }

        if (is_array($content)) {
            return implode(PHP_EOL, $content);
        }

        return $content;
    }

    protected function getStub(string $filename): string
    {
        return $this->findStub($this->stub ?: $filename);
    }

    protected function findStub(string $filename): string
    {
        $basename = pathinfo($filename, PATHINFO_FILENAME);

        $path = $this->app->resourcePath('arrays/' . $basename . '.stub');

        return file_exists($path) ? $path : Stub::PHP_ARRAY;
    }
}
