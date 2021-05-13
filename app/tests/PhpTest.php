<?php

namespace Tests;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;

final class PhpTest extends TestCase
{
    public function testPhp(): void
    {
        foreach ($this->files() as $filename) {
            $source = $this->source('main/' . $filename);

            foreach ($this->locales() as $locale) {
                $path = $this->target_path . '/' . $locale . '/main/' . $filename;

                $target = $this->load($path);

                $this->assertSame(array_keys($source), array_keys($target), $this->messageForLocale($path, $locale));

                if ($this->isInline($filename)) {
                    $this->assertDoesntSee($path, [':attribute', ':Attribute']);
                }
            }
        }
    }

    protected function files(): array
    {
        return File::names($this->source_path . '/main', static fn ($filename) => str_ends_with($filename, '.php'));
    }

    protected function locales(): array
    {
        return Directory::names($this->target_path);
    }

    protected function load(string $path): array
    {
        return Pretty::make()->load($path);
    }
}
