<?php

namespace LaravelLang\Lang\Facades;

use DragonCode\Support\Facades\Facade;
use LaravelLang\Lang\Services\Translate as Service;

/**
 * @method static string translate(string $locale, string $text)
 */
class Translate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }
}
