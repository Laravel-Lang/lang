<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\Support\Concerns\Makeable;
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
}
