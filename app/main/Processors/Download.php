<?php

namespace LaravelLang\Development\Processors;

use DragonCode\Support\Facades\Helpers\Filesystem\Directory;
use GuzzleHttp\Client;
use RuntimeException;
use ZipArchive;

class Download extends Processor
{
    protected string $url = 'https://github.com/{name}/archive/refs/heads/{branch}.zip';

    protected array $repositories = [
        'laravel/framework' => [
            '5.8',
            '6.x',
            '7.x',
            '8.x',
            '9.x',
        ],

        'laravel/laravel' => [
            '5.8',
            '6.x',
            '7.x',
            '8.x',
            '9.x',
        ],
    ];

    public function __construct(
        protected Client     $client = new Client(),
        protected ZipArchive $zip = new ZipArchive()
    ) {
    }

    public function run(): void
    {
        foreach ($this->repositories as $repository => $branches) {
            foreach ($branches as $branch) {
                $url = $this->url($repository, $branch);

                $namespace_path = $this->namespacePath($repository, $branch);
                $download_path  = $this->downloadPath($repository, $branch);

                $this->cleanup($namespace_path, $download_path);
                $this->download($url, $download_path);
                $this->unpack($namespace_path, $download_path);
            }
        }
    }

    protected function download(string $url, string $sink): void
    {
        Directory::ensureDirectory(dirname($sink));

        $this->client->get($url, compact('sink'));
    }

    protected function unpack(string $directory, string $file): void
    {
        if ($this->zip->open($file)) {
            $this->zip->extractTo($directory);
            $this->zip->close();
        } else {
            throw new RuntimeException('Cannot unpack file: ' . realpath($file));
        }
    }

    protected function url(string $repository, string $branch): string
    {
        return str_replace(['{name}', '{branch}'], [$repository, $branch], $this->url);
    }

    protected function downloadPath(string $repository, string $branch): string
    {
        return $this->app->vendorPath($repository . '/' . $branch . '.zip');
    }

    protected function namespacePath(string $repository, string $branch): string
    {
        return $this->vendorPath($repository . '/' . $branch);
    }

    protected function vendorPath(string $path): string
    {
        return $this->app->vendorPath($path);
    }

    protected function cleanup(string ...$paths): void
    {
        foreach ($paths as $path) {
            Directory::ensureDelete($path);
        }
    }
}
