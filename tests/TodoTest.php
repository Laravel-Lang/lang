<?php

namespace Tests;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;

final class TodoTest extends TestCase
{
    protected $target_path = __DIR__ . '/../src';

    protected $todo = __DIR__ . '/../todo.md';

    public function testSee(): void
    {
        foreach ($this->locales() as $locale) {
            $text = '## ' . $locale;

            $this->assertSee($this->todo, $text);
        }
    }

    public function testDoesntSee(): void
    {
        $this->assertDoesntSee($this->todo, '## foo');
        $this->assertDoesntSee($this->todo, '## bar');
        $this->assertDoesntSee($this->todo, '## baz');
    }

    protected function locales(): array
    {
        return Directory::names($this->target_path);
    }
}
