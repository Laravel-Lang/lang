<?php

namespace Tests;

use Helldar\PrettyArray\Services\File;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Str;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $source_path = __DIR__ . '/../../script/en';

    protected $target_path;

    protected function source(string $filename): array
    {
        $content = $this->load($this->source_path . '/' . $filename);

        if ($this->isValidation($filename)) {
            $custom     = Arr::get($content, 'custom', []);
            $attributes = Arr::get($content, 'attributes', []);

            $content = Arr::except($content, ['custom', 'attributes']);

            $content = Arr::ksort($content);

            return array_merge($content, compact('custom', 'attributes'));
        }

        return Arr::ksort($content);
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

    protected function sort(array &$array): void
    {
        $array = Arr::ksort($array);
    }

    protected function isValidation(string $filename): bool
    {
        return Str::startsWith($filename, 'validation');
    }
}
