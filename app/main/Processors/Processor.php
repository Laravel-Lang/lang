<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Tools\Stub;
use LaravelLang\Lang\Application;
use LaravelLang\Lang\Concerns\Contains;
use LaravelLang\Lang\Contracts\Filesystem;
use LaravelLang\Lang\Contracts\Processable;
use LaravelLang\Lang\Contracts\Stringable;
use LaravelLang\Lang\Services\Filesystem\Base;
use LaravelLang\Lang\Services\Filesystem\Json as JsonFilesystem;
use LaravelLang\Lang\Services\Filesystem\Markdown as MarkdownFilesystem;
use LaravelLang\Lang\Services\Filesystem\Php as PhpFilesystem;

abstract class Processor implements Processable
{
    use Contains;
    use Makeable;

    protected Application $app;

    protected array $source = [];

    protected string $target_path;

    /** @var \LaravelLang\Lang\Contracts\Filesystem[]|array */
    protected array $filesystems = [];

    public function application(Application $app): Processable
    {
        $this->app = $app;

        return $this;
    }

    protected function merge(array $source, array $target, string $filename): array
    {
        $target = $this->filter($target, $source);

        $this->sort($source);
        $this->sort($target);

        if ($this->isValidation($filename)) {
            $custom     = $this->getFallbackValue($source, $target, 'custom');
            $attributes = $this->getFallbackValue($source, $target, 'attributes');

            $source = Arr::except($source, ['custom', 'attributes']);
            $target = Arr::except($target, ['custom', 'attributes']);

            return array_merge($source, $target, compact('custom', 'attributes'));
        }

        return array_merge($source, $target);
    }

    protected function process(string $target_path, string $filename, string $locale = null): void
    {
        $source = $this->source($filename);
        $target = $this->load($target_path);

        $content = $this->merge($source, $target, $filename);

        $this->store($target_path, $content, $filename);
    }

    protected function source(string $filename): array
    {
        if ($this->source[$filename] ?? false) {
            return $this->source[$filename];
        }

        return $this->source[$filename] = $this->load($this->getSourcePath($filename));
    }

    protected function getFallbackValue(array $source, array $target, string $key)
    {
        return Arr::get($target, $key) ?: Arr::get($source, $key, []);
    }

    protected function getTargetPath(string $path = null): string
    {
        if ($path = $this->app->cleanPath($path)) {
            $path = '/' . $path;
        }

        return $this->app->path($this->target_path . $path);
    }

    protected function getSourcePath(string $filename = null): string
    {
        return $this->app->sourcePath($filename);
    }

    protected function filter(array $first, array $second): array
    {
        $keys = array_keys($second);

        return Arr::only($first, $keys);
    }

    protected function sort(array &$array, bool $key = true): void
    {
        $array = $key
            ? Arr::ksort($array)
            : Arr::sort($array);
    }

    protected function load(string $path): array
    {
        return $this->getFilesystem($path)->load($path);
    }

    protected function locales(): array
    {
        return Directory::names($this->getTargetPath());
    }

    protected function resolveFilename(string $filename, string $locale): string
    {
        return $this->isMainJson($filename) ? $locale . '.json' : $filename;
    }

    protected function getFilesystem(string $filename): Filesystem
    {
        $class = $this->getFilesystemClass($filename);

        if ($this->filesystems[$class] ?? false) {
            return $this->filesystems[$class];
        }

        return $this->filesystems[$class] = $this->loadFilesystem($class);
    }

    protected function getFilesystemClass(string $path): string
    {
        return match (true) {
            $this->isJson($path) => JsonFilesystem::class,

            $this->isMarkdown($path) => MarkdownFilesystem::class,

            default => PhpFilesystem::class,
        };
    }

    protected function loadFilesystem(Filesystem|Base|string $filesystem): Filesystem
    {
        return $filesystem::make()->application($this->app);
    }

    protected function store(string $path, array|string|Stringable $content, string $source_filename = null, bool $is_simple = false): void
    {
        $stub = $this->getStubPath($source_filename);

        $this->getFilesystem($path)->store($path, $content, $is_simple, $stub);
    }

    protected function getStubPath(?string $filename): ?string
    {
        return empty($filename) ? Stub::PHP_ARRAY : $filename;
    }
}
