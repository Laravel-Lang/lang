<?php

namespace LaravelLang\Lang\Contracts;

use Helldar\Support\Tools\Stub;
use LaravelLang\Lang\Application;

interface Filesystem
{
    public function application(Application $app): self;

    public function load(string $path): array;

    public function store(string $path, array|string|Stringable $content, bool $is_simple = false, string $stub = Stub::PHP_ARRAY): void;
}
