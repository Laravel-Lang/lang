<?php

namespace LaravelLang\Lang\Contracts;

use LaravelLang\Lang\Application;

interface Processable
{
    public function run(): void;

    public function application(Application $app): self;
}
