<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Nova\DuskSuite;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel/nova-dusk-suite';

    public function files(): array
    {
        return [
            'nova/dusk-suite/master/dusk-suite.json' => '{locale}.json',
            'nova/dusk-suite/master/en.json'         => '{locale}.json',
        ];
    }
}
