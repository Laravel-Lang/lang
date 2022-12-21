<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V9 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^9.0';

    public function files(): array
    {
        return [
            'framework/9.x/framework.json' => '{locale}.json',

            'framework/extended.json'      => '{locale}.json',

            'laravel/9.x/auth.php'         => '{locale}/auth.php',
            'laravel/9.x/pagination.php'   => '{locale}/pagination.php',
            'laravel/9.x/passwords.php'    => '{locale}/passwords.php',
            'laravel/9.x/validation.php'   => '{locale}/validation.php',
        ];
    }
}
