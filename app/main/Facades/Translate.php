<?php

namespace LaravelLang\Development\Facades;

use DragonCode\Support\Facades\Facade;
use LaravelLang\Development\Services\Translate as Service;

/**
 * @method static string translate(string $locale, string $text)
 */
class Translate extends Facade
{
    protected static function getFacadeAccessor(): mixed
    {
        return Service::class;
    }
}
