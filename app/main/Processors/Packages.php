<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Facades\Helpers\Arr;
use LaravelLang\Lang\Facades\Package;

final class Packages extends Processor
{
    protected array $packages = [
        'laravel/breeze'    => 'packages/breeze.json',
        'laravel/fortify'   => 'packages/fortify.json',
        'laravel/jetstream' => 'packages/jetstream.json',
    ];

    public function run(): void
    {
        foreach ($this->packages as $package => $filename) {
            $items = $this->files($package);

            $path = $this->getSourcePath($filename);

            $content = $this->map($items);

            $this->sort($content, false);

            $this->store($path, $content);
        }
    }

    protected function map(array $items): array
    {
        return Arr::values($items);
    }

    protected function files(string $package): array
    {
        $path = $this->vendorPath($package);

        return Package::some()->path($path)->content();
    }

    protected function vendorPath(string $package): string
    {
        return $this->app->path('vendor/' . $package);
    }
}
