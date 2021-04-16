<?php

namespace LaravelLang\Lang\Facades;

use Dotenv\Repository\AdapterRepository;
use Dotenv\Repository\RepositoryInterface;
use Helldar\Support\Facades\BaseFacade;
use LaravelLang\Lang\Support\Env as Support;

/**
 * @method static mixed get(string $key, mixed $default = null)
 * @method static AdapterRepository|RepositoryInterface getRepository()
 */
class Env extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return Support::class;
    }
}
