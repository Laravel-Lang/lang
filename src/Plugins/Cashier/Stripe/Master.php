<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Cashier\Stripe;

use LaravelLang\Publisher\Plugins\Plugin;

class Master extends Plugin
{
    protected ?string $vendor = 'laravel/cashier';

    protected string $version = 'dev-master';

    public function files(): array
    {
        return [
            'cashier/stripe/master/stripe.json' => '{locale}.json',
        ];
    }
}
