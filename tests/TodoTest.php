<?php

namespace Tests;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Str;

final class TodoTest extends TestCase
{
    protected $target_path = __DIR__ . '/../src';

    protected $todo = __DIR__ . '/../TODO.md';

    public function testSee(): void
    {
        foreach ($this->locales() as $locale) {
            $slug = Str::slug($locale);

            $this->assertSee($this->todo, "{$locale}&nbsp;");
            $this->assertSee($this->todo, "(todo/{$slug}.md)");
        }
    }

    public function testDoesntSee(): void
    {
        $this->assertDoesntSee($this->todo, '## foo');
        $this->assertDoesntSee($this->todo, '## bar');
        $this->assertDoesntSee($this->todo, '## baz');

        $this->assertDoesntSee($this->todo, '(todo/foo.md)');
        $this->assertDoesntSee($this->todo, '(todo/bar.md)');
        $this->assertDoesntSee($this->todo, '(todo/baz.md)');
    }

    protected function locales(): array
    {
        return Directory::names($this->target_path);
    }
}
