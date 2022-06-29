<?php

declare(strict_types=1);

namespace LaravelLang\Lang;

use LaravelLang\Lang\Plugins;
use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected string $base_path = __DIR__ . '/../';

    protected array $plugins = [
        Plugins\Breeze\V1::class,
        Plugins\Cashier\Stripe\V12::class,
        Plugins\Cashier\Stripe\V13::class,
    ];
}
