<?php

namespace LaravelLang\Development\Services\Filesystem;

use DragonCode\Support\Concerns\Makeable;
use DragonCode\Support\Facades\Helpers\Arr;
use LaravelLang\Development\Application;
use LaravelLang\Development\Concerns\Storable;
use LaravelLang\Development\Contracts\Filesystem;

abstract class Base implements Filesystem
{
    use Makeable;
    use Storable;

    protected Application $app;

    public function application(Application $app): Filesystem
    {
        $this->app = $app;

        return $this;
    }

    public function load(string $path): array
    {
        return [];
    }

    protected function correctValues(array $items): array
    {
        $callback = static fn ($value) => stripslashes($value);

        return Arr::of($items)
            ->map($callback, true)
            ->renameKeys($callback)
            ->toArray();
    }
}
