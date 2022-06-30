<?php

namespace LaravelLang\Lang\Plugins\Lumen;

use LaravelLang\Publisher\Plugins\Plugin;

class V6 extends Plugin
{
    protected ?string $vendor = 'laravel/lumen-framework';

    protected string $version = '^6.0';

    public function files(): array
    {
        return [
            'lumen-framework/extended.json' => '{locale}.json',

            'lumen-framework/6.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
