<?php

namespace LaravelLang\Lang\Facades;

use Helldar\Support\Facades\Facade;
use LaravelLang\Lang\Support\Finder;
use LaravelLang\Lang\Support\Package as Support;
use LaravelLang\Lang\Support\Parser;
use Symfony\Component\Finder\Finder as SymfonyFinder;

/**
 * @method static Support some()
 */
class Package extends Facade
{
    protected static function getFacadeAccessor(): Support
    {
        return new Support(self::resolveFinder(), self::resolveParser());
    }

    protected static function resolveFinder(): Finder
    {
        $finder = SymfonyFinder::create();

        return Finder::make($finder);
    }

    protected static function resolveParser(): Parser
    {
        return Parser::make();
    }
}
