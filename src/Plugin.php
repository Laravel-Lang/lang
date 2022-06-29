<?php

declare(strict_types=1);

namespace LaravelLang\Lang;

use LaravelLang\Lang\Plugins\Breeze;
use LaravelLang\Lang\Plugins\Cashier;
use LaravelLang\Lang\Plugins\Fortify;
use LaravelLang\Lang\Plugins\Jetstream;
use LaravelLang\Lang\Plugins\Laravel;
use LaravelLang\Lang\Plugins\Lumen;
use LaravelLang\Lang\Plugins\Nova;
use LaravelLang\Lang\Plugins\SparkPaddle;
use LaravelLang\Lang\Plugins\SparkStripe;
use LaravelLang\Lang\Plugins\Ui;
use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected string $base_path = __DIR__ . '/../';

    protected array $plugins = [
        Breeze::class,
        Cashier::class,
        Fortify::class,
        Jetstream::class,
        Laravel::class,
        Lumen::class,
        Nova::class,
        SparkPaddle::class,
        SparkStripe::class,
        Ui::class,
    ];
}
