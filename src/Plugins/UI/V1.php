<?php

namespace LaravelLang\Lang\Plugins\UI;

use LaravelLang\Publisher\Plugins\Plugin;

class V1 extends Plugin
{
    protected ?string $vendor = 'laravel/ui';

    protected string $version = '^1.0';

    public function files(): array
    {
        return [
            'ui/1.x/ui.json' => '{locale}.json',
        ];
    }
}
