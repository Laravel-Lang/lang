<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\File;

final class Excludes extends Processor
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

    protected function process(string $target_path, string $filename, string $locale = null): void
    {
        $target = $this->load($target_path);

        $content = $this->merge($this->keys, $target, $filename);

        $this->sort($content);

        $this->store($target_path, array_values($content), $this->stub, true);
    }

    protected function merge(array $source, array $target, string $filename): array
    {
        return array_intersect($source, $target);
    }

    protected function sort(array &$array): void
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
        return File::names($this->getSourcePath());
    }

    protected function targetFiles(): array
    {
        return File::names($this->getTargetPath());
    }

    protected function getSourceKeys(string $filename): array
    {
        $items = $this->load($this->getSourcePath($filename));

        return array_keys($items);
    }
}
