<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins;

use LaravelLang\Publisher\Plugins\BasePlugin;

class Laravel extends BasePlugin
{
    public function vendor(): ?string
    {
        return 'laravel/framework';
    }

    public function files(): array
    {
        return [
            'auth.php'       => '{locale}/auth.php',
            'pagination.php' => '{locale}/pagination.php',
            'passwords.php'  => '{locale}/passwords.php',
            'validation.php' => '{locale}/validation.php',

            'packages/framework/laravel-5.json'   => '{locale}.json',
            'packages/framework/laravel-6.json'   => '{locale}.json',
            'packages/framework/laravel-7.json'   => '{locale}.json',
            'packages/framework/laravel-8.json'   => '{locale}.json',
            'packages/framework/laravel-9.json'   => '{locale}.json',
            'packages/framework/laravel-ext.json' => '{locale}.json',
        ];
    }
}
