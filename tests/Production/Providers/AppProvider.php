<?php

declare(strict_types=1);

namespace Tests\Production\Providers;

use LaravelLang\Lang\Provider;

class AppProvider extends Provider
{
    public function basePath(): string
    {
        return __DIR__ . '/../../../';
    }
}
