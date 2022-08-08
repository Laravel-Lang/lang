<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Breeze;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/breeze';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'breeze/master/breeze.json' => '{locale}.json',
        ];
    }
}
