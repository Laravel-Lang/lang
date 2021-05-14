<?php

namespace LaravelLang\Lang\Processors\Splitters;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;

final class Structure extends Processor
{
    protected string $target_path = 'locales';

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            $this->create($locale);
        }
    }

    protected function create(string $locale): void
    {
        foreach ($this->files as $file) {
            $from = $this->getSourcePath($file);
            $to   = $this->getTargetPath($locale . '/' . $file);

            $this->ensureDirectory($to);

            if (! $this->fileExists($to)) {
                copy($from, $to);
            }
        }
    }

    protected function fileExists(string $path): bool
    {
        return File::exists($path);
    }

    protected function ensureDirectory(string $path): void
    {
        $directory = pathinfo($path, PATHINFO_DIRNAME);

        Directory::ensureDirectory($directory);
    }
}
