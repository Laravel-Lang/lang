<?php

namespace LaravelLang\Lang\Plugins\Fortify;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/fortify';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'fortify/master/fortify.json' => '{locale}.json',
        ];
    }
}
