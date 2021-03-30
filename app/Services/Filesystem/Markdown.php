<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use LaravelLang\Lang\Contracts\Filesystem;

final class Markdown extends Base
{
    public function store(string $path, array|string $content): void
    {
        File::store($path, $content);
    }

    public function prepare(): Filesystem
    {
        $path = $this->path();

        $this->delete($path);
        $this->create($path);

        return $this;
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
}
