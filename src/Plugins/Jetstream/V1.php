<?php

namespace LaravelLang\Lang\Plugins\Jetstream;

use LaravelLang\Publisher\Plugins\Plugin;

class V1 extends Plugin
{
    protected ?string $vendor = 'laravel/jetstream';

    protected string $version = '^1.0';

    public function files(): array
    {
        return [
            'jetstream/1.x/jetstream.json' => '{locale}.json',
            'jetstream/extended.json'      => '{locale}.json',
        ];
    }
}
