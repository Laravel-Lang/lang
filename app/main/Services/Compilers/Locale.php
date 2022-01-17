<?php

namespace LaravelLang\Development\Services\Compilers;

use LaravelLang\Development\Constants\Resource;

class Locale extends Compiler
{
    public function toString(): string
    {
        return $this->template(Resource::LOCALE, $this->items);
    }
}
