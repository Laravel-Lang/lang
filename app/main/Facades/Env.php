<?php

namespace LaravelLang\Development\Facades;

use Dotenv\Repository\AdapterRepository;
use Dotenv\Repository\RepositoryInterface;
use DragonCode\Support\Facades\Facade;
use LaravelLang\Development\Support\Env as Support;

/**
 * @method static mixed get(string $key, mixed $default = null)
 * @method static AdapterRepository|RepositoryInterface getRepository()
 */
class Env extends Facade
{
    protected static function getFacadeAccessor(): mixed
    {
        return Support::class;
    }
}
