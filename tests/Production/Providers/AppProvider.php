<?php

declare(strict_types=1);

namespace Tests\Production\Providers;

use LaravelLang\Lang\Provider as BaseProvider;

class AppProvider extends BaseProvider
{
    public function basePath(): string
    {
        return __DIR__ . '/../../';
    }
}
