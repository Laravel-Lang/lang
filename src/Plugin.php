<?php

declare(strict_types=1);

namespace LaravelLang\Lang;

use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'laravel-lang/lang';

    protected string $base_path = __DIR__ . '/../';

    protected array $plugins = [
        Plugins\Breeze\V1::class,
        Plugins\Cashier\Stripe\V12::class,
        Plugins\Cashier\Stripe\V13::class,
        Plugins\Fortify\V1::class,
        Plugins\Jetstream\Master::class,
        Plugins\Jetstream\V1::class,
        Plugins\Jetstream\V2::class,
        Plugins\Laravel\Master::class,
        Plugins\Laravel\V6::class,
        Plugins\Laravel\V7::class,
        Plugins\Laravel\V8::class,
        Plugins\Laravel\V9::class,
        Plugins\Lumen\V6::class,
        Plugins\Lumen\V7::class,
        Plugins\Lumen\V8::class,
        Plugins\Lumen\V9::class,
        Plugins\Nova\LogViewer\Main::class,
        Plugins\Nova\V3::class,
        Plugins\Nova\V4::class,
        Plugins\Spark\Paddle::class,
        Plugins\Spark\Stripe::class,
        Plugins\UI\V1::class,
        Plugins\UI\V2::class,
        Plugins\UI\V3::class,
    ];
}
