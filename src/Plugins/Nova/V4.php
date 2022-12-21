<?php

namespace LaravelLang\Lang\Plugins\Nova;

use LaravelLang\Publisher\Plugins\Plugin;

class V4 extends Plugin
{
    protected ?string $vendor = 'laravel/nova';

    protected string $version = '^4.0';

    public function files(): array
    {
        return [
            'nova/4.x/nova.json'      => 'vendor/nova/{locale}.json',

            'nova/4.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
