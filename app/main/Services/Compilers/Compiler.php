<?php

namespace LaravelLang\Lang\Services\Compilers;

use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Concerns\Template;
use LaravelLang\Lang\Contracts\Application;
use LaravelLang\Lang\Contracts\Stringable;

abstract class Compiler implements Stringable
{
    use Makeable;
    use Template;

    protected array $items;

    public function __construct(
        protected Application $app
    ) {
    }

    abstract protected function handle(): string;

    public function items(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function toString(): string
    {
        return $this->handle() ?: '';
    }

    protected function isJson(string $filename): bool
    {
        return Str::contains($filename, 'json');
    }
}
