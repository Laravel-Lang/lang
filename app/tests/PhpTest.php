<?php

namespace Tests;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;

final class PhpTest extends TestCase
{
    protected string $target_path = __DIR__ . '/../../src';

    public function testAuth(): void
    {
        $filename = 'auth.php';

        $source = $this->source($filename);

        foreach ($this->locales() as $locale) {
            $target = $this->load($this->target_path . '/' . $locale . '/' . $filename);

            $this->assertSame(array_keys($source), array_keys($target));
        }
    }

    public function testPagination(): void
    {
        $filename = 'pagination.php';

        $source = $this->source($filename);

        foreach ($this->locales() as $locale) {
            $target = $this->load($this->target_path . '/' . $locale . '/' . $filename);

            $this->assertSame(array_keys($source), array_keys($target));
        }
    }

    public function testPasswords(): void
    {
        $filename = 'passwords.php';

        $source = $this->source($filename);

        foreach ($this->locales() as $locale) {
            $target = $this->load($this->target_path . '/' . $locale . '/' . $filename);

            $this->assertSame(array_keys($source), array_keys($target));
        }
    }

    public function testValidation(): void
    {
        $filename = 'validation.php';

        $source = $this->source($filename);

        foreach ($this->locales() as $locale) {
            $target = $this->load($this->target_path . '/' . $locale . '/' . $filename);

            $this->assertSame(array_keys($source), array_keys($target));
        }
    }

    public function testValidationInline(): void
    {
        $filename = 'validation-inline.php';

        $source = $this->source($filename);

        foreach ($this->locales() as $locale) {
            $target = $this->load($this->target_path . '/' . $locale . '/' . $filename);

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
