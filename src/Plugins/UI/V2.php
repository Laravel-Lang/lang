<?php

namespace LaravelLang\Lang\Plugins\UI;

use LaravelLang\Publisher\Plugins\Plugin;

class V2 extends Plugin
{
    protected ?string $vendor = 'laravel/ui';

    protected string $version = '^2.0';

    public function files(): array
    {
        return [
            'ui/2.x/ui.json' => '{locale}.json',
        ];
    }
}
