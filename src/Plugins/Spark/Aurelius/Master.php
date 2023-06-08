<?php

namespace LaravelLang\Lang\Plugins\Spark\Aurelius;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/spark-aurelius';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'spark/aurelius/master/en.json' => '{locale}.json',

            'spark/aurelius/master/teams.php'      => 'spark/{locale}/teams.php',
            'spark/aurelius/master/validation.php' => 'spark/{locale}/validation.php',
        ];
    }
}
