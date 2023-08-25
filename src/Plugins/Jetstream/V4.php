<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Jetstream;

use LaravelLang\Publisher\Plugins\Plugin;

class V4 extends Plugin
{
    protected ?string $vendor = 'laravel/jetstream';

    protected string $version = '^4.0';

    public function files(): array
    {
        return [
            'jetstream/4.x/jetstream.json' => '{locale}.json',
            'jetstream/extended.json'      => '{locale}.json',
        ];
    }
}
