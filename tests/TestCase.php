<?php

namespace Tests;

use Helldar\PrettyArray\Services\File;
use Helldar\Support\Facades\Helpers\Str;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $source_path = __DIR__ . '/../script/en';

    protected $target_path;

    protected function source(string $filename): array
    {
        return $this->load($this->source_path . '/' . $filename);
    }

    protected function assertSee(string $path, string $content): void
    {
        $file = File::make()->loadRaw($path);

        $this->assertTrue(Str::contains($file, $content));
    }

    protected function assertDoesntSee(string $path, string $content): void
    {
        $file = File::make()->loadRaw($path);

        $this->assertFalse(Str::contains($file, $content));
    }
}
