<?php

namespace LaravelLang\Lang\Plugins\Spark\Aurelius;

use LaravelLang\Publisher\Plugins\Plugin;

class V11 extends Plugin
{
    protected ?string $vendor = 'laravel/spark-aurelius';

    protected string $version = '^11.0';

    public function files(): array
    {
        return [
            'spark/aurelius/11.x/en.json' => '{locale}.json',

            'spark/aurelius/11.x/teams.php'      => 'spark/{locale}/teams.php',
            'spark/aurelius/11.x/validation.php' => 'spark/{locale}/validation.php',
        ];
    }
}
