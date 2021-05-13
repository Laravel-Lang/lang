<?php

namespace LaravelLang\Lang\Processors\Splitters;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Helpers\Str;

final class Structure extends Processor
{
    protected string $target_path = 'locales';

    protected array $map = [
        '{locale}.json'         => 'main/main.json',
        'auth.php'              => 'main/auth.php',
        'pagination.php'        => 'main/pagination.php',
        'passwords.php'         => 'main/passwords.php',
        'validation.php'        => 'main/validation.php',
        'validation-inline.php' => 'main/validation-inline.php',
    ];

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            $this->move($locale);
            $this->create($locale);
        }
    }

    protected function move(string $locale): void
    {
        foreach ($this->map as $from => $to) {
            $from = Str::replace($from, compact('locale'), '{%s}');

            $from_path = $this->getTargetPath($locale . '/' . $from);
            $to_path   = $this->getTargetPath($locale . '/' . $to);

            $this->ensureDirectory($to_path);

            if ($this->fileExists($from_path) && ! $this->fileExists($to_path)) {
                rename($from_path, $to_path);
            }
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

        Directory::make($directory);
    }
}
