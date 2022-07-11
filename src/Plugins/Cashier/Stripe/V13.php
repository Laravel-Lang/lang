<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Cashier\Stripe;

use LaravelLang\Publisher\Plugins\Plugin;

class V13 extends Plugin
{
    protected ?string $vendor = 'laravel/cashier';

    protected string $version = '^13.0';

    public function files(): array
    {
        return [
            'cashier/stripe/13.x/stripe.json' => '{locale}.json',
        ];
    }
}
