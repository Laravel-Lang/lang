<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Horizon;

use LaravelLang\Publisher\Plugins\Plugin;

class V5 extends Plugin
{
    protected ?string $vendor = 'laravel/horizon';

    protected string $version = '^5.9';

    public function files(): array
    {
        return [
            'horizon/5.x/horizon.json' => 'vendor/horizon/{locale}.json',
        ];
    }
}
