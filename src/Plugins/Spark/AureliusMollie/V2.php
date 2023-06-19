<?php

namespace LaravelLang\Lang\Plugins\Spark\AureliusMollie;

use LaravelLang\Publisher\Plugins\Plugin;

class V2 extends Plugin
{
    protected ?string $vendor = 'laravel/spark-aurelius-mollie';

    protected string $version = '^2.0';

    public function files(): array
    {
        return [
            'spark/aurelius-mollie/v2/en.json' => '{locale}.json',

            'spark/aurelius-mollie/v2/teams.php'      => 'spark/{locale}/teams.php',
            'spark/aurelius-mollie/v2/validation.php' => 'spark/{locale}/validation.php',
        ];
    }
}
