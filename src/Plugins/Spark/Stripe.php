<?php

namespace LaravelLang\Lang\Plugins\Spark;

use LaravelLang\Publisher\Plugins\Plugin;

class Stripe extends Plugin
{
    protected ?string $vendor = 'laravel/spark-stripe';

    public function files(): array
    {
        return [
            'spark/spark-stripe.json' => 'spark/{locale}.json',
        ];
    }
}
