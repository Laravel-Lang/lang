<?php

namespace LaravelLang\Development\Services\Compilers;

use DragonCode\Support\Concerns\Makeable;
use LaravelLang\Development\Concerns\Contains;
use LaravelLang\Development\Concerns\Template;
use LaravelLang\Development\Contracts\Application;
use LaravelLang\Development\Contracts\Stringable;

abstract class Compiler implements Stringable
{
    use Contains;
    use Makeable;
    use Template;

    protected array $items;

    protected array $extend = [];

    public function __construct(
        protected Application $app
    ) {
    }

    public function items(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function extend(array $values): self
    {
        $this->extend = $values;

        return $this;
    }
}
