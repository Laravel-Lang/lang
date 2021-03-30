<?php

namespace Tests;

use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Helpers\Str;

class TodoLocalesTest extends TestCase
{
    protected $target_path = __DIR__ . '/../todo';

    public function testSee(): void
    {
        foreach ($this->locales() as $locale) {
            $path = $this->path($locale);

            $this->assertSee($path, '# ' . Str::before($locale, '.'));
            $this->assertSee($path, '###### All missed:');
            $this->assertSee($path, '[to top]');

            $this->assertDoesntSee($path, '## foo');
            $this->assertDoesntSee($path, '## bar');
            $this->assertDoesntSee($path, '## baz');
        }
    }

    protected function locales(): array
    {
        return File::names($this->target_path);
    }

    protected function path(string $filename): string
    {
        return $this->target_path . '/' . $filename;
    }
}
