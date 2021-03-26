<?php

namespace LaravelLang\Lang\Processors;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\PrettyArray\Services\Formatter;
use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Application;
use LaravelLang\Lang\Contracts\Processable;

abstract class Processor implements Processable
{
    use Makeable;

    /** @var \LaravelLang\Lang\Application */
    protected $application;

    protected $source = [];

    protected $target_path;

    abstract protected function load(string $path): array;

    function application(Application $app): Processable
    {
        $this->application = $app;

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
        if ($path = $this->application->cleanPath($path)) {
            $path = '/' . $path;
        }

        return $this->application->path($this->target_path . $path);
    }

    protected function getSourcePath(string $filename = null): string
    {
        return $this->application->sourcePath($filename);
    }

    protected function isValidation(string $filename): bool
    {
        return Str::startsWith($filename, 'validation');
    }

    protected function sort(array &$array): void
    {
        $array = Arr::ksort($array);
    }

    protected function isJson(string $filename): bool
    {
        return Str::endsWith($filename, 'json');
    }

    protected function store(string $path, array $content): void
    {
        $this->isJson($path)
            ? $this->storeJson($path, $content)
            : $this->storePhp($path, $content);
    }

    protected function storeJson(string $path, array $content): void
    {
        Arr::storeAsJson($path, $content, false, JSON_UNESCAPED_UNICODE ^ JSON_PRETTY_PRINT);
    }

    protected function storePhp(string $path, array $content): void
    {
        $service = Formatter::make();
        $service->setEqualsAlign();

        Pretty::make($service->raw($content))->store($path);
    }
}
