<?php

namespace LaravelLang\Lang\Plugins\Lumen;

use LaravelLang\Publisher\Plugins\Plugin;

class V10 extends Plugin
{
    protected ?string $vendor = 'laravel/lumen-framework';

    protected string $version = '^10.0 || 10.x-dev';

    public function files(): array
    {
        return [
            'lumen-framework/extended.json' => '{locale}.json',

            'lumen-framework/master/validation.php' => '{locale}/validation.php',
        ];
    }
}
