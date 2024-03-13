<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Jetstream;

use LaravelLang\Publisher\Plugins\Plugin;

class V5 extends Plugin
{
    protected ?string $vendor = 'laravel/jetstream';

    protected string $version = '^5.0';

    public function files(): array
    {
        return [
            'jetstream/5.x/jetstream.json' => '{locale}.json',
            'jetstream/extended.json'      => '{locale}.json',
        ];
    }
}
