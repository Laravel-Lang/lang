<?php

namespace LaravelLang\Development\Contracts;

use LaravelLang\Development\Application;

interface Processable
{
    public function run(): void;

    public function application(Application $app): self;
}
