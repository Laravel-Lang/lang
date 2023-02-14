<?php

declare(strict_types=1);

namespace LaravelLang\Lang;

use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'laravel-lang/lang';

    protected string $base_path = __DIR__ . '/../';

    protected array $plugins = [
        Plugins\Breeze\Master::class,
        Plugins\Breeze\V1::class,

        Plugins\Cashier\Stripe\Master::class,
        Plugins\Cashier\Stripe\V12::class,
        Plugins\Cashier\Stripe\V13::class,
        Plugins\Cashier\Stripe\V14::class,

        Plugins\Fortify\Master::class,
        Plugins\Fortify\V1::class,

        Plugins\Jetstream\Master::class,
        Plugins\Jetstream\V1::class,
        Plugins\Jetstream\V2::class,
        Plugins\Jetstream\V3::class,

        Plugins\Laravel\Master::class,
        Plugins\Laravel\V9::class,
        Plugins\Laravel\V10::class,

        Plugins\Lumen\Master::class,
        Plugins\Lumen\V9::class,
        Plugins\Lumen\V10::class,

        Plugins\Nova\LogViewer\Main::class,
        Plugins\Nova\V3::class,
        Plugins\Nova\V4::class,

        Plugins\Spark\Paddle::class,
        Plugins\Spark\Stripe::class,

        Plugins\Spark\Aurelius\Master::class,
        Plugins\Spark\Aurelius\V11::class,
        Plugins\Spark\Aurelius\V12::class,

        Plugins\Spark\AureliusMollie\V2::class,

        Plugins\UI\Master::class,
        Plugins\UI\V3::class,
        Plugins\UI\V4::class,
    ];
}
