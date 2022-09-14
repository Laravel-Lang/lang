<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Cashier\Stripe;

use LaravelLang\Publisher\Plugins\Plugin;

class V14 extends Plugin
{
    protected ?string $vendor = 'laravel/cashier';

    protected string $version = '^14.0';

    public function files(): array
    {
        return [
            'cashier/stripe/14.x/stripe.json' => '{locale}.json',
        ];
    }
}
