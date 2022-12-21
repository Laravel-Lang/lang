<?php

namespace LaravelLang\Lang\Plugins\Lumen;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/lumen-framework';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'lumen-framework/extended.json'         => '{locale}.json',

            'lumen-framework/master/validation.php' => '{locale}/validation.php',
        ];
    }
}
