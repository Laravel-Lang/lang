<?php

namespace LaravelLang\Lang;

use Helldar\Support\Concerns\Makeable;
use LaravelLang\Lang\Contracts\Processable;

class Application
{
    use Makeable;

    public function __construct(
        protected string $base_path
    ) {
    }

    public function basePath(): string
    {
        return rtrim($this->base_path, '/\\');
    }

    public function sourcePath(string $filename = null): string
    {
        return $this->path('script/en/' . $this->cleanPath($filename));
    }

    public function path(string $path = null): string
    {
        if ($value = $this->cleanPath($path)) {
            return $this->basePath() . '/' . $value;
        }

        return $this->basePath();
    }

    public function processor(Processable $processor): void
    {
        $processor->application($this)->run();
    }

    public function cleanPath(string $path = null): ?string
    {
        if (! empty($path)) {
            return ltrim($path, '/\\');
        }

        return null;
    }
}
