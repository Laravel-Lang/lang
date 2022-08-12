<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Telescope;

use LaravelLang\Publisher\Plugins\Plugin;

class V4 extends Plugin
{
    protected ?string $vendor = 'laravel/telescope';

    protected string $version = '^4.9';

    public function files(): array
    {
        return [
            'telescope/4.x/telescope.json' => 'vendor/telescope/{locale}.json',
        ];
    }
}
