<?php

namespace LaravelLang\Development\Facades;

use DragonCode\Support\Facades\Facade;
use LaravelLang\Development\Support\Finder;
use LaravelLang\Development\Support\Package as Support;
use LaravelLang\Development\Support\Parser;
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
