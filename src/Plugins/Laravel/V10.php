<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V10 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^10.0 || 10.x-dev';

    public function files(): array
    {
        return [
            'framework/master/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'laravel/master/auth.php'       => '{locale}/auth.php',
            'laravel/master/pagination.php' => '{locale}/pagination.php',
            'laravel/master/passwords.php'  => '{locale}/passwords.php',
            'laravel/master/validation.php' => '{locale}/validation.php',
        ];
    }
}
