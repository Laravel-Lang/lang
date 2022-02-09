<?php

use LaravelLang\Development\Facades\Env;

if (! function_exists('env')) {
    /**
     * Determine if the given value is "blank".
     *
     * @param string $key
     * @param mixed|null $default
     *
     * @return bool
     */
    function env(string $key, mixed $default = null): mixed
    {
        return Env::get($key, $default);
    }
}
