<?php

namespace LaravelLang\Lang\Contracts;

use LaravelLang\Lang\Application;

interface Filesystem
{
    public function application(Application $app): self;

    public function load(string $path): array;

    public function store(string $path, array $content): void;
}
