<?php

namespace LaravelLang\Lang\Plugins\Spark;

use LaravelLang\Publisher\Plugins\Plugin;

class Paddle extends Plugin
{
    protected ?string $vendor = 'laravel/spark-paddle';

    public function files(): array
    {
        return [
            'spark/spark-paddle.json' => 'spark/{locale}.json',
        ];
    }
}
