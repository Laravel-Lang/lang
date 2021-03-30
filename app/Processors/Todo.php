<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Contracts\Filesystem;
use LaravelLang\Lang\Services\Filesystem\Json as JsonFilesystem;
use LaravelLang\Lang\Services\Filesystem\Php as PhpFilesystem;

class Todo extends Processor
{
    protected string $target_path = 'todo';

    protected array $translations = [];

    /** @var \LaravelLang\Lang\Contracts\Filesystem[]|array */
    protected array $filesystems = [];

    public function __construct()
    {
        $this->loadFilesystem(JsonFilesystem::make());
        $this->loadFilesystem(PhpFilesystem::make());
    }

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            foreach ($this->files($locale) as $file) {

                $target_path = $this->getTargetPath($locale . '/' . $file);

                $this->process($target_path, $file);
            }
        }
    }

    protected function files(string $locale): array
    {
        return File::names($this->getTargetPath($locale));
    }

    protected function locales(): array
    {
        return Directory::names($this->getTargetPath());
    }

    protected function getTranslation(string $filename): array
    {
        if ($this->translations[$filename] ?? false) {
            return $this->translations[$filename];
        }

        return $this->translations[$filename] = [];
    }

    protected function isJson(string $filename): bool
    {
        return Str::endsWith($filename, 'json');
    }

    protected function getFilesystem(string $filename): Filesystem
    {
        $type = $this->isJson($filename) ? JsonFilesystem::class : PhpFilesystem::class;

        return $this->filesystems[$type];
    }

    protected function loadFilesystem(Filesystem $filesystem): void
    {
        $type = get_class($filesystem);

        $this->filesystems[$type] = $filesystem;
    }
}
