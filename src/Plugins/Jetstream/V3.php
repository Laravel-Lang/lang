<?php

namespace LaravelLang\Lang\Plugins\Jetstream;

use LaravelLang\Publisher\Plugins\Plugin;

class V3 extends Plugin
{
    protected ?string $vendor = 'laravel/jetstream';

    protected string $version = '^3.0';

    public function files(): array
    {
        return [
            'jetstream/3.x/jetstream.json' => '{locale}.json',
            'jetstream/extended.json'      => '{locale}.json',
        ];
    }
}
