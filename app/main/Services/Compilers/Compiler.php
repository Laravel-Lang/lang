<?php

namespace LaravelLang\Lang\Services\Compilers;

use Helldar\Support\Concerns\Makeable;
use LaravelLang\Lang\Concerns\Contains;
use LaravelLang\Lang\Concerns\Template;
use LaravelLang\Lang\Contracts\Application;
use LaravelLang\Lang\Contracts\Stringable;

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
