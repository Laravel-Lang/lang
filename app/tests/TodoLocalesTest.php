<?php

namespace Tests;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Str;

class TodoLocalesTest extends TestCase
{
    protected $source_path = __DIR__ . '/../../src';

    protected $target_path = __DIR__ . '/../../todo';

    public function testSee(): void
    {
        foreach ($this->locales() as $locale) {
            $path = $this->path($locale);

            $this->assertFileExists($path);

            $this->assertSee($path, '# ' . Str::before($locale, '.'));
            $this->assertSee($path, '###### All missed:');

            $this->assertDoesntSee($path, '## foo');
            $this->assertDoesntSee($path, '## bar');
            $this->assertDoesntSee($path, '## baz');
        }
    }

    protected function locales(): array
    {
        return Directory::names($this->source_path);
    }

    protected function path(string $filename): string
    {
        $filename = Str::slug($filename);

        return $this->target_path . '/' . $filename . '.md';
    }
}
