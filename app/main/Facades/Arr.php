<?php

namespace LaravelLang\Lang\Facades;

use Helldar\Support\Facades\BaseFacade;
use LaravelLang\Lang\Helpers\Arr as Helper;

/**
 * @method static array flatten(array $array)
 */
class Arr extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return Helper::class;
    }
}
