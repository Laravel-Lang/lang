<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Breeze;

use LaravelLang\Publisher\Plugins\Plugin;

class V1 extends Plugin
{
    protected ?string $vendor = 'laravel/breeze';

    protected string $version = '^1.0';

    public function files(): array
    {
        return [
            'breeze/1.x/breeze.json' => '{locale}.json',
        ];
    }
}
