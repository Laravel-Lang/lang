<?php

declare(strict_types=1);

namespace LaravelLang\Lang;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use LaravelLang\Publisher\Constants\Config;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->config();
    }

    protected function config(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/lang-publisher.php', Config::PUBLIC_KEY);
    }
}
