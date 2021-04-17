<?php

namespace LaravelLang\Lang\Facades;

use Helldar\Support\Facades\BaseFacade;
use LaravelLang\Lang\Services\Translate as Service;

/**
 * @method static string translate(string $locale, string $text)
 */
final class Translate extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }
}
