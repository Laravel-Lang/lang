<?php

namespace Tests;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;

final class PhpTest extends TestCase
{
    protected string $target_path = __DIR__ . '/../../src';

    protected array $files = ['auth.php', 'pagination.php', 'passwords.php', 'validation.php', 'validation-inline.php'];

    public function testPhp(): void
    {
        foreach ($this->files as $filename) {
            $source = $this->source($filename);

            foreach ($this->locales() as $locale) {
                $path = $this->target_path . '/' . $locale . '/' . $filename;

                $target = $this->load($path);

            $this->assertSame(array_keys($source), array_keys($target));
        }
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
