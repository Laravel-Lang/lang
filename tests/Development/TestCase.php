<?php

namespace Tests\Development;

use DragonCode\PrettyArray\Services\File;
use DragonCode\Support\Facades\Helpers\Ables\Arrayable;
use DragonCode\Support\Facades\Helpers\Arr;
use DragonCode\Support\Facades\Helpers\Filesystem\Directory;
use DragonCode\Support\Facades\Helpers\Filesystem\File as Filesystem;
use DragonCode\Support\Facades\Helpers\Str;
use JetBrains\PhpStorm\Pure;
use LaravelLang\Development\Constants\Locales;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Tests\Development\Concerns\Messages;

abstract class TestCase extends BaseTestCase
{
    use Messages;

    protected string $source_path = __DIR__ . '/../../source';

    protected string $target_path = __DIR__ . '/../../locales';

    protected function source(string $filename): array
    {
        $content = $this->isJsonFile($filename) ? $this->loadJson() : $this->loadFile($filename);

        if ($this->isValidation($filename)) {
            $custom = Arr::get($content, 'custom', []);

            return Arrayable::of($content)
                ->except(['attributes', 'custom'])
                ->ksort()
                ->merge(compact('custom'))
                ->get();
        }

        return Arr::ksort($content);
    }

    protected function loadFile(string $filename): array
    {
        return $this->load($this->source_path . '/' . $filename);
    }

    protected function loadJson(): array
    {
        $items = [];

        foreach ($this->files('json') as $file) {
            $values = $this->loadFile($file);

            $items = Arr::addUnique($items, $values);
        }

        return Arr::renameKeys($items, static fn ($key, $value) => $value);
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

    protected function files(string $extension, bool $recursive = true): array
    {
        return Filesystem::names($this->source_path, static fn ($filename) => str_ends_with($filename, $extension), $recursive);
    }

    protected function locales(): array
    {
        return Directory::names($this->target_path);
    }

    protected function isValidation(string $filename): bool
    {
        $names = ['validation.php', 'validation-inline.php'];

        return in_array($filename, $names, true);
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

    protected function isJsonFile(string $filename): bool
    {
        return str_ends_with($filename, 'json');
    }

    protected function isEnglish(string $filename): bool
    {
        return str_starts_with($filename, Locales::ENGLISH);
    }

    #[Pure(true)]
    protected function resolveFilename(string $filename, ?string $locale = null): string
    {
        $basename = pathinfo($filename, PATHINFO_BASENAME);

        return $this->isJsonFile($basename) && ! empty($locale) ? $locale . '.json' : $basename;
    }

    protected function correctValues(array $items): array
    {
        $callback = static fn ($value) => stripslashes($value);

        return Arrayable::of($items)
            ->map($callback, true)
            ->renameKeys($callback)
            ->get();
    }
}
