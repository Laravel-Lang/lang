<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Pulse;

use LaravelLang\Publisher\Plugins\Plugin;

class V1 extends Plugin
{
    protected ?string $vendor = 'laravel/pulse';

    public function files(): array
    {
        return [
            'pulse/1.x/pulse.json' => '{locale}.json',
        ];
    }
}
