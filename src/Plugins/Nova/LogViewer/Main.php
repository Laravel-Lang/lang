<?php

declare(strict_types=1);

namespace LaravelLang\Lang\Plugins\Nova\LogViewer;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel/nova-log-viewer';

    protected string $version = 'dev-main || ^0.1.0';

    public function files(): array
    {
        return [
            'nova/log-viewer/main/log-viewer.json' => 'vendor/nova/{locale}.json',
        ];
    }
}
