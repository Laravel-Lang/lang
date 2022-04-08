<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins;

use LaravelLang\Publisher\Plugins\BasePlugin;

class Jetstream extends BasePlugin
{
    public function vendor(): ?string
    {
        return 'laravel/jetstream';
    }

    public function files(): array
    {
        return [
            'packages/jetstream/jetstream.json'     => '{locale}.json',
            'packages/jetstream/jetstream-ext.json' => '{locale}.json',
        ];
    }
}
