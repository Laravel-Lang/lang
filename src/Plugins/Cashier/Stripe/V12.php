<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Cashier\Stripe;

use LaravelLang\Publisher\Plugins\Plugin;

class V12 extends Plugin
{
    protected ?string $vendor = 'laravel/cashier';

    protected string $version = '^12.0';

    public function files(): array
    {
        return [
            'cashier/stripe/12.x/stripe.json' => '{locale}.json',
        ];
    }
}
