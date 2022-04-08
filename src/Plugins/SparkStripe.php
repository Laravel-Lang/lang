<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins;

use LaravelLang\Publisher\Plugins\BasePlugin;

class SparkStripe extends BasePlugin
{
    public function vendor(): ?string
    {
        return 'laravel/spark-stripe';
    }

    public function files(): array
    {
        return [
            'packages/spark/spark-stripe.json' => 'spark/{locale}.json',
        ];
    }
}
