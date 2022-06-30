<?php

namespace LaravelLang\Lang\Plugins\UI;

use LaravelLang\Publisher\Plugins\Plugin;

class V3 extends Plugin
{
    protected ?string $vendor = 'laravel/ui';

    protected string $version = '^3.0';

    public function files(): array
    {
        return [
            'ui/3.x/ui.json' => '{locale}.json',
        ];
    }
}
