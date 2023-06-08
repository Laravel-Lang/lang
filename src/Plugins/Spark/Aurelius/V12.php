<?php

namespace LaravelLang\Lang\Plugins\Spark\Aurelius;

use LaravelLang\Publisher\Plugins\Plugin;

class V12 extends Plugin
{
    protected ?string $vendor = 'laravel/spark-aurelius';

    protected string $version = '^12.0';

    public function files(): array
    {
        return [
            'spark/aurelius/12.x/en.json' => '{locale}.json',

            'spark/aurelius/12.x/teams.php'      => 'spark/{locale}/teams.php',
            'spark/aurelius/12.x/validation.php' => 'spark/{locale}/validation.php',
        ];
    }
}
