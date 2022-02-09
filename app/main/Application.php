<?php

namespace LaravelLang\Development;

use Dotenv\Dotenv;
use DragonCode\Support\Concerns\Makeable;
use LaravelLang\Development\Contracts\Application as ApplicationContract;
use LaravelLang\Development\Contracts\Processable;
use LaravelLang\Development\Facades\Env;

class Application implements ApplicationContract
{
    use Makeable;

    public function __construct(
        protected string $base_path
    ) {
        $this->createDotenv()->safeLoad();
    }

    public function basePath(): string
    {
        return rtrim($this->base_path, '/\\');
    }

    public function sourcePath(?string $filename = null): string
    {
        return $this->path('source/' . $this->cleanPath($filename));
    }

    public function localePath(?string $locale = null): string
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

    public function path(?string $path = null): string
    {
        if ($value = $this->cleanPath($path)) {
            return $this->basePath() . '/' . $value;
        }

        return $this->basePath();
    }

    public function cleanPath(?string $path = null): ?string
    {
        if (! empty($path)) {
            return ltrim($path, '/\\');
        }

        return null;
    }

    public function processor(Processable $processor): void
    {
        $processor->application($this)->run();
    }

    protected function createDotenv(): Dotenv
    {
        return Dotenv::create(
            Env::getRepository(),
            $this->environmentPath(),
            $this->environmentFile()
        );
    }

    protected function environmentPath(): string
    {
        return $this->path('app');
    }

    protected function environmentFile(): string
    {
        return '.env';
    }
}
