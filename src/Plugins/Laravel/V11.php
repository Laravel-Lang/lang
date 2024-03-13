<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V11 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^11.0';

    public function files(): array
    {
        return [
            'framework/11.x/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'framework/11.x/auth.php'       => '{locale}/auth.php',
            'framework/11.x/pagination.php' => '{locale}/pagination.php',
            'framework/11.x/passwords.php'  => '{locale}/passwords.php',
            'framework/11.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
