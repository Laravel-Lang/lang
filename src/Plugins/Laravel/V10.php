<?php

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V10 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^10.0';

    public function files(): array
    {
        return [
            'framework/10.x/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'framework/10.x/auth.php'       => '{locale}/auth.php',
            'framework/10.x/pagination.php' => '{locale}/pagination.php',
            'framework/10.x/passwords.php'  => '{locale}/passwords.php',
            'framework/10.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
