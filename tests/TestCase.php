<?php

namespace Tests;

use Helldar\PrettyArray\Services\File;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Str;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $source_path = __DIR__ . '/../script/en';

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
        $array = Arr::ksort($array, static function ($current, $next) {
            $current = is_string($current) ? Str::lower($current) : $current;
            $next    = is_string($next) ? Str::lower($next) : $next;

            if ($current === $next) {
                return 0;
            }

            if (is_string($current) && is_numeric($next)) {
                return -1;
            }

            if (is_numeric($current) && is_string($next)) {
                return 1;
            }

            return $current < $next ? -1 : 1;
        });
    }

    protected function isValidation(string $filename): bool
    {
        return Str::startsWith($filename, 'validation');
    }
}
