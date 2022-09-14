<?php

namespace LaravelLang\Lang\Plugins\UI;

use LaravelLang\Publisher\Plugins\Plugin;

class V4 extends Plugin
{
    protected ?string $vendor = 'laravel/ui';

    protected string $version = '^4.0';

    public function files(): array
    {
        return [
            'ui/4.x/ui.json' => '{locale}.json',
        ];
    }
}
