<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V8 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^8.0';

    public function files(): array
    {
        return [
            'framework/8.x/framework.json' => '{locale}.json',

            'laravel/8.x/auth.php'       => '{locale}/auth.php',
            'laravel/8.x/pagination.php' => '{locale}/pagination.php',
            'laravel/8.x/passwords.php'  => '{locale}/passwords.php',
            'laravel/8.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
