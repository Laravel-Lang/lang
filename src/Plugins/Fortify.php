<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins;

use LaravelLang\Publisher\Plugins\BasePlugin;

class Fortify extends BasePlugin
{
    public function vendor(): ?string
    {
        return 'laravel/fortify';
    }

    public function files(): array
    {
        return [
            'packages/fortify.json' => '{locale}.json',
        ];
    }
}
