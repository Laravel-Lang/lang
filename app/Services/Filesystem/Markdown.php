<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;

final class Markdown extends Base
{
    public function load(string $path): array
    {
        return [];
    }

    public function store(string $path, array $content): void
    {
        $content = $this->compile($content);

        File::store($path, $content);
    }

    public function prepare(): void
    {
        $path = $this->path();

        $this->delete($path);
        $this->create($path);
    }

    protected function delete(string $path): void
    {
        Directory::delete($path);
    }

    protected function create(string $path): void
    {
        Directory::make($path);
    }

    protected function path(): string
    {
        return $this->app->path('todo');
    }

    protected function compile(array $content): string
    {

    }
}
