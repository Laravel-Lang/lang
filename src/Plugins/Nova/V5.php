<?php

namespace LaravelLang\Lang\Plugins\Nova;

use LaravelLang\Publisher\Plugins\Plugin;

class V5 extends Plugin
{
    protected ?string $vendor = 'laravel/nova';

    protected string $version = '^5.0';

    public function files(): array
    {
        return [
            'nova/5.x/nova.json' => 'vendor/nova/{locale}.json',

            'nova/5.x/validation.php' => 'vendor/nova/{locale}/validation.php',
        ];
    }
}
