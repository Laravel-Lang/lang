<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Passkeys;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel/passkeys';

    protected string $version = 'dev-main || 0.*';

    public function files(): array
    {
        return [
            'passkeys/main/passkeys.json' => '{locale}.json',
            'passkeys/extended.json'      => '{locale}.json',
        ];
    }
}
