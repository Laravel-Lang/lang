<?php

namespace Tests;

use Helldar\PrettyArray\Services\File;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File as Filesystem;
use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Constants\Locales;
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

    protected function assertDoesntSee(string $path, string|array $content): void
    {
        $file = File::make()->loadRaw($path);

        $values = Arr::wrap($content);

        foreach ($values as $value) {
            $this->assertFalse(
                str_contains($file, $value),
                $this->messageAssertDoesntSee($path, $value)
            );
        }
    }

    protected function sort(array &$array): void
    {
        $array = Arr::ksort($array);
    }

    protected function files(string $extension): array
    {
        return Filesystem::names($this->source_path, static fn ($filename) => str_ends_with($filename, $extension), recursive: true);
    }

    protected function locales(): array
    {
        return Directory::names($this->target_path);
    }

    protected function isValidation(string $filename): bool
    {
        return str_starts_with($filename, 'validation');
    }

    protected function isInline(string $filename): bool
    {
        return str_contains($filename, 'inline');
    }

    protected function isMainJson(string $filename): bool
    {
        if ($this->isEnglish($filename)) {
            return true;
        }

        $locale = Str::before($filename, '.');

        return Directory::exists(__DIR__ . '/../../locales/' . $locale);
    }

    protected function isEnglish(string $filename): bool
    {
        return str_starts_with($filename, Locales::ENGLISH);
    }
}
