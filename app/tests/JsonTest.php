<?php

namespace Tests;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;

final class JsonTest extends TestCase
{
    public function testJson(): void
    {
        $source = $this->source('en.json');

        foreach ($this->files() as $locale) {
            $path = $this->target_path . '/' . $locale . '/' . $locale . '.json';

            $target = $this->load($path);

            $this->assertSame(array_keys($source), array_keys($target), $this->messageForPath($path));
        }
    }

    protected function files(): array
    {
        return Directory::names($this->target_path);
    }

    protected function load(string $path): array
    {
        $content = Pretty::make()->loadRaw($path);

        return json_decode($content, true);
    }
}
