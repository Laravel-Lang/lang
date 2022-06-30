<?php

namespace LaravelLang\Lang\Plugins\Jetstream;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/jetstream';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'jetstream/master/jetstream.json' => '{locale}.json',
            'jetstream/extended.json'         => '{locale}.json',
        ];
    }
}
