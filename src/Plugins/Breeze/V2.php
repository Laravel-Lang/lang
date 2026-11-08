<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Breeze;

use LaravelLang\Publisher\Plugins\Plugin;

class V2 extends Plugin
{
    protected ?string $vendor = 'laravel/breeze';

    protected string $version = '^2.0';

    public function files(): array
    {
        return [
            'breeze/2.x/breeze.json' => '{locale}.json',
        ];
    }
}
