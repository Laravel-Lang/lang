<?php

namespace LaravelLang\Lang\Services\Compilers;

use LaravelLang\Lang\Constants\Resource;

class Locale extends Compiler
{
    public function toString(): string
    {
        return $this->template(Resource::LOCALE, $this->items);
    }
}
