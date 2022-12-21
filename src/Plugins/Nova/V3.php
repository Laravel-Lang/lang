<?php

namespace LaravelLang\Lang\Plugins\Nova;

use LaravelLang\Publisher\Plugins\Plugin;

class V3 extends Plugin
{
    protected ?string $vendor = 'laravel/nova';

    protected string $version = '^3.0';

    public function files(): array
    {
        return [
            'nova/3.x/nova.json'      => 'vendor/nova/{locale}.json',

            'nova/3.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
