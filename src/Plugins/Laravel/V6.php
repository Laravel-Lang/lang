<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V6 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^6.0';

    public function files(): array
    {
        return [
            'framework/6.x/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'laravel/6.x/auth.php'       => '{locale}/auth.php',
            'laravel/6.x/pagination.php' => '{locale}/pagination.php',
            'laravel/6.x/passwords.php'  => '{locale}/passwords.php',
            'laravel/6.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
