<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'framework/master/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'framework/master/auth.php'       => '{locale}/auth.php',
            'framework/master/pagination.php' => '{locale}/pagination.php',
            'framework/master/passwords.php'  => '{locale}/passwords.php',
            'framework/master/validation.php' => '{locale}/validation.php',
        ];
    }
}
