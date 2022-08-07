<?php

namespace LaravelLang\Lang\Plugins\UI;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/ui';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'ui/master/ui.json' => '{locale}.json',
        ];
    }
}
