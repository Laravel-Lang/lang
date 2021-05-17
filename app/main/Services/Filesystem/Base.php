<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Arr;
use LaravelLang\Lang\Application;
use LaravelLang\Lang\Concerns\Storable;
use LaravelLang\Lang\Contracts\Filesystem;

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

        $items = Arr::map($items, $callback, true);

        return Arr::renameKeys($items, $callback);
    }
}
