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
use LaravelLang\Publisher\Plugins\BaseProvider;

class Provider extends BaseProvider
{
    public function basePath(): string
    {
        return __DIR__ . '/../';
    }

    /**
     * @return \DragonCode\Contracts\LangPublisher\Plugin[]
     */
    public function plugins(): array
    {
        return $this->resolvePlugins([
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
        ]);
    }
}
