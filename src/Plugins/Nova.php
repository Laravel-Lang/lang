<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins;

use LaravelLang\Publisher\Plugins\BasePlugin;

class Nova extends BasePlugin
{
    public function vendor(): ?string
    {
        return 'laravel/nova';
    }

    public function files(): array
    {
        return [
            'packages/nova/nova-3.json' => 'vendor/nova/{locale}.json',
            'packages/nova/nova-4.json' => 'vendor/nova/{locale}.json',

            'packages/nova/validation-nova.php' => '{locale}/validation-nova.php',
        ];
    }
}
