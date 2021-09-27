<?php

namespace LaravelLang\Lang\Facades;

use Helldar\Support\Facades\Facade;
use LaravelLang\Lang\Services\Translate as Service;

/**
 * @method static string translate(string $locale, string $text)
 */
final class Translate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }
}
