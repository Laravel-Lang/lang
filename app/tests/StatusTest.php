<?php

namespace Tests;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Str;

final class StatusTest extends TestCase
{
    protected string $target_path = __DIR__ . '/../../src';

    protected string $status = __DIR__ . '/../../docs/status.md';

    public function testSee(): void
    {
        foreach ($this->locales() as $locale) {
            $slug = Str::slug($locale);

            $this->assertSee($this->status, "{$locale}&nbsp;");
            $this->assertSee($this->status, "(statuses/{$slug}.md)");
        }
    }

    public function testDoesntSee(): void
    {
        $this->assertDoesntSee($this->status, '## foo');
        $this->assertDoesntSee($this->status, '## bar');
        $this->assertDoesntSee($this->status, '## baz');

        $this->assertDoesntSee($this->status, '(statuses/foo.md)');
        $this->assertDoesntSee($this->status, '(statuses/bar.md)');
        $this->assertDoesntSee($this->status, '(statuses/baz.md)');

        $this->assertDoesntSee($this->status, '(todo/foo.md)');
        $this->assertDoesntSee($this->status, '(todo/bar.md)');
        $this->assertDoesntSee($this->status, '(todo/baz.md)');
    }

    protected function locales(): array
    {
        return Directory::names($this->target_path);
    }
}
