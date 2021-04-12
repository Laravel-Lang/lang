<?php

namespace Tests;

use Helldar\PrettyArray\Services\File;
use Helldar\Support\Facades\Helpers\Arr;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Tests\Concerns\Messages;

abstract class TestCase extends BaseTestCase
{
    use Messages;

    protected string $source_path = __DIR__ . '/../../source';

    protected string $target_path = __DIR__ . '/../../locales';

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

        $this->assertTrue(
            str_contains($file, $content),
            $this->messageAssertSee($path, $content)
        );
    }

    protected function assertDoesntSee(string $path, string $content): void
    {
        $file = File::make()->loadRaw($path);

        $this->assertFalse(
            str_contains($file, $content),
            $this->messageAssertDoesntSee($path, $content)
        );
    }

    protected function sort(array &$array): void
    {
        $array = Arr::ksort($array);
    }

    protected function isValidation(string $filename): bool
    {
        return str_contains($filename, 'validation');
    }

    protected function isInline(string $filename): bool
    {
        return str_contains($filename, 'inline');
    }
}
