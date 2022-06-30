<?php

namespace LaravelLang\Lang\Plugins\Fortify;

use LaravelLang\Publisher\Plugins\Plugin;

class V1 extends Plugin
{
    protected ?string $vendor = 'laravel/fortify';

    protected string $version = '^1.0';

    public function files(): array
    {
        return [
            'fortify/1.x/fortify.json' => '{locale}.json',
        ];
    }
}
