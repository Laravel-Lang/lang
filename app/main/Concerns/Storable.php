<?php

namespace LaravelLang\Lang\Concerns;

use Helldar\Support\Facades\Helpers\Instance;
use LaravelLang\Lang\Contracts\Stringable;

trait Storable
{
    protected function prepareToStore(array|string|Stringable $content): string
    {
        if (Instance::of($content, Stringable::class)) {
            return $content->toString();
        }

        if (is_array($content)) {
            return implode(PHP_EOL, $content);
        }

        return $content;
    }
}
