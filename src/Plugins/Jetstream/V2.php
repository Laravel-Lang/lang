<?php

namespace LaravelLang\Lang\Plugins\Jetstream;

use LaravelLang\Publisher\Plugins\Plugin;

class V2 extends Plugin
{
    protected ?string $vendor = 'laravel/jetstream';

    protected string $version = '^2.0';

    public function files(): array
    {
        return [
            'jetstream/2.x/jetstream.json' => '{locale}.json',
            'jetstream/extended.json'      => '{locale}.json',
        ];
    }
}
