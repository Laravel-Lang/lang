<?php

namespace LaravelLang\Development\Support;

use Dotenv\Repository\AdapterRepository;
use Dotenv\Repository\RepositoryBuilder;
use Dotenv\Repository\RepositoryInterface;
use PhpOption\Option;

class Env
{
    protected static RepositoryInterface|AdapterRepository|null $repository;

    public function get(string $key, mixed $default = null): mixed
    {
        $value = $this->getRepository()->get($key);

        return Option::fromValue($value)->getOrElse($default);
    }

    public function getRepository(): AdapterRepository|RepositoryInterface
    {
        if (self::$repository ?? false) {
            return self::$repository;
        }

        $builder = RepositoryBuilder::createWithDefaultAdapters();

        return self::$repository = $builder->immutable()->make();
    }
}
