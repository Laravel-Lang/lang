<?php

namespace LaravelLang\Lang\Plugins\Lumen;

use LaravelLang\Publisher\Plugins\Plugin;

class V9 extends Plugin
{
    protected ?string $vendor = 'laravel/lumen-framework';

    protected string $version = '^9.0';

    public function files(): array
    {
        return [
            'lumen-framework/extended.json'      => '{locale}.json',

            'lumen-framework/9.x/validation.php' => '{locale}/validation.php',
        ];
    }
}
