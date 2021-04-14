<?php

namespace LaravelLang\Lang;

use Helldar\Support\Concerns\Makeable;
use LaravelLang\Lang\Contracts\Application as ApplicationContract;
use LaravelLang\Lang\Contracts\Filesystem;
use LaravelLang\Lang\Contracts\Processable;

final class Application implements ApplicationContract
{
    use Makeable;

    protected Filesystem $filesystem;

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
        return $this->path('source/' . $this->cleanPath($filename));
    }

    public function localePath(string $locale = null): string
    {
        return $this->path('locales/' . $this->cleanPath($locale));
    }

    public function excludePath(string $locale): string
    {
        return $this->path('excludes/' . $this->cleanPath($locale) . '.php');
    }

    public function resourcePath(string $filename): string
    {
        return $this->path('app/resources/' . $this->cleanPath($filename));
    }

    public function path(string $path = null): string
    {
        if ($value = $this->cleanPath($path)) {
            return $this->basePath() . '/' . $value;
        }

        return $this->basePath();
    }

    public function cleanPath(string $path = null): ?string
    {
        if (! empty($path)) {
            return ltrim($path, '/\\');
        }

        return null;
    }

    public function filesystem(Filesystem $filesystem): ApplicationContract
    {
        $this->filesystem = $filesystem->application($this);

        return $this;
    }

    public function getFilesystem(): Filesystem
    {
        return $this->filesystem;
    }

    public function processor(Processable $processor, Filesystem $filesystem): void
    {
        $this->filesystem($filesystem);

        $processor->application($this)->run();
    }
}
