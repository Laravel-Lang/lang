<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V7 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^7.0';

    public function files(): array
    {
        return [
            'framework/7.x/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'laravel/7.x/auth.php'       => '{locale}/auth.php',
            'laravel/7.x/pagination.php' => '{locale}/pagination.php',
            'laravel/7.x/passwords.php'  => '{locale}/passwords.php',
            'laravel/7.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
