<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V12 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^12.0';

    public function files(): array
    {
        return [
            'framework/12.x/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'framework/12.x/auth.php'       => '{locale}/auth.php',
            'framework/12.x/pagination.php' => '{locale}/pagination.php',
            'framework/12.x/passwords.php'  => '{locale}/passwords.php',
            'framework/12.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
