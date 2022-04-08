<?php

namespace LaravelLang\Development\Processors;

use DragonCode\Support\Facades\Helpers\Arr;
use LaravelLang\Development\DataTransferObjects\PackageDTO;
use LaravelLang\Development\Facades\Package;

class Packages extends Processor
{
    protected array $packages = [
        'laravel/breeze'    => 'packages/breeze.json',
        'laravel/fortify'   => 'packages/fortify.json',
        'laravel/jetstream' => 'packages/jetstream/jetstream.json',
        'laravel/ui'        => 'packages/ui.json',

        'laravel/framework/5.8' => 'packages/framework/laravel-5.json',
        'laravel/framework/6.x' => 'packages/framework/laravel-6.json',
        'laravel/framework/7.x' => 'packages/framework/laravel-7.json',
        'laravel/framework/8.x' => 'packages/framework/laravel-8.json',
        'laravel/framework/9.x' => 'packages/framework/laravel-9.json',

        'laravel/laravel/5.8' => ['packages/framework/laravel-5.json', false],
        'laravel/laravel/6.x' => ['packages/framework/laravel-6.json', false],
        'laravel/laravel/7.x' => ['packages/framework/laravel-7.json', false],
        'laravel/laravel/8.x' => ['packages/framework/laravel-8.json', false],
        'laravel/laravel/9.x' => ['packages/framework/laravel-9.json', false, 'laravel/laravel/9.x/laravel-9.x/lang/en.json'],
    ];

    public function run(): void
    {
        foreach ($this->packages as $package => $params) {
            $dto = $this->resolveFileNames($params);

            $path = $this->getSourcePath($dto->filename);

            $source = $dto->replace ? [] : $this->loadTarget($path);

            $items = array_merge(
                $source,
                $this->parse($package),
                $this->rawFiles($dto->copy_files)
            );

            $content = $this->map($items);

            $this->sort($content, false);

            $this->store($path, $content);
        }
    }

    protected function map(array $items): array
    {
        return Arr::values($items);
    }

    protected function rawFiles(array $filenames): array
    {
        $items = [];

        foreach ($filenames as $filename) {
            $path = $this->app->vendorPath($filename);

            $content = $this->getFilesystem($path)->load($path);

            $items = array_merge($items, $content);
        }

        return $items;
    }

    protected function parse(string $package): array
    {
        $path = $this->app->vendorPath($package);

        return Package::some()->path($path)->content();
    }

    protected function resolveFileNames(array|string $params): PackageDTO
    {
        return PackageDTO::fromArray((array) $params);
    }

    protected function loadTarget(string $filename): array
    {
        return $this->getFilesystem($filename)->load($filename);
    }
}
