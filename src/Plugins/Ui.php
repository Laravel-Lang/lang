<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins;

use LaravelLang\Publisher\Plugins\BasePlugin;

class Ui extends BasePlugin
{
    public function vendor(): ?string
    {
        return 'laravel/ui';
    }

    public function files(): array
    {
        return [
            'packages/ui.json' => '{locale}.json',
        ];
    }
}
