<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Application;
use LaravelLang\Lang\Contracts\Processable;

abstract class Processor implements Processable
{
    use Makeable;

    protected Application $app;

    protected array $source = [];

    protected string $target_path;

    public function application(Application $app): Processable
    {
        $this->app = $app;

        return $this;
    }

    protected function compare(array $source, array $target, string $filename): array
    {
        $target = Arr::only($target, array_keys($source));

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

    protected function process(string $target_path, string $filename): void
    {
        $source = $this->source($filename);
        $target = $this->load($target_path);

        $content = $this->compare($source, $target, $filename);

        $this->store($target_path, $content);
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

    protected function isValidation(string $filename): bool
    {
        return Str::startsWith($filename, 'validation');
    }

    protected function sort(array &$array): void
    {
        $array = Arr::ksort($array);
    }

    protected function load(string $path): array
    {
        return $this->app->getFilesystem()->load($path);
    }

    protected function store(string $path, array $content): void
    {
        $this->app->getFilesystem()->store($path, $content);
    }
}
