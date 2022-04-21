<?php

namespace LaravelLang\Development\Processors;

use DragonCode\Support\Facades\Filesystem\File;
use DragonCode\Support\Facades\Helpers\Arr;

class Excludes extends Processor
{
    protected string $target_path = 'excludes';

    protected array $keys = [];

    protected ?string $stub = 'exclude.stub';

    public function run(): void
    {
        $this->loadKeys();
        $this->handle();
    }

    protected function handle(): void
    {
        foreach ($this->targetFiles() as $filename) {
            $this->process($this->getTargetPath($filename), $filename);
        }
    }

    protected function process(string $target_path, string $filename, ?string $locale = null): void
    {
        $target = $this->load($target_path);

        $content = $this->merge($this->keys, $target, $filename);

        $this->sort($content, false);

        $this->store($target_path, array_values($content), $this->stub, true);
    }

    protected function merge(array $source, array $target, string $filename): array
    {
        return array_intersect($source, $target);
    }

    protected function sort(array &$array, bool $key = true): void
    {
        $array = Arr::sort(array_unique($array));
    }

    protected function loadKeys(): void
    {
        foreach ($this->sourceFiles() as $filename) {
            $keys = $this->getSourceKeys($filename);

            $this->keys = array_merge($this->keys, $keys);
        }
    }

    protected function sourceFiles(): array
    {
        return File::names($this->getSourcePath(), recursive: true);
    }

    protected function targetFiles(): array
    {
        return File::names($this->getTargetPath());
    }

    protected function getSourceKeys(string $filename): array
    {
        $items = $this->load($this->getSourcePath($filename));

        if ($this->isJson($filename)) {
            return array_values($items);
        }

        return $this->flatten($items);
    }

    protected function flatten(array $array): array
    {
        return Arr::flatten($array);
    }
}
