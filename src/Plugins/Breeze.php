<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins;

use LaravelLang\Publisher\Plugins\BasePlugin;

class Breeze extends BasePlugin
{
    public function vendor(): ?string
    {
        return 'laravel/breeze';
    }

    public function files(): array
    {
        return [
            'packages/fortify.json'   => '{locale}.json',
            'packages/jetstream.json' => '{locale}.json',
        ];
    }
}
