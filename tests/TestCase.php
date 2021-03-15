<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $source_path = __DIR__ . '/../script/en';

    protected $target_path;

    abstract protected function load(string $path): array;

    protected function source(string $filename): array
    {
        return $this->load($this->source_path . '/' . $filename);
    }
}
