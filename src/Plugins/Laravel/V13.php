<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Laravel;

use LaravelLang\Publisher\Plugins\Plugin;

class V13 extends Plugin
{
    protected ?string $vendor = 'laravel/framework';

    protected string $version = '^13.0';

    public function files(): array
    {
        return [
            'framework/13.x/framework.json' => '{locale}.json',

            'framework/extended.json' => '{locale}.json',

            'framework/13.x/auth.php'       => '{locale}/auth.php',
            'framework/13.x/pagination.php' => '{locale}/pagination.php',
            'framework/13.x/passwords.php'  => '{locale}/passwords.php',
            'framework/13.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
