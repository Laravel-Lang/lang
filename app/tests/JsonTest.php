<?php

namespace Tests;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Filesystem\File;

final class JsonTest extends TestCase
{
    protected string $target_path = __DIR__ . '/../../json';

    public function testJson(): void
    {
        $source = $this->source('en.json');

        foreach ($this->files() as $file) {
            $path = $this->target_path . '/' . $file;

            $target = $this->load($path);

            $this->assertSame(array_keys($source), array_keys($target), $this->messageForPath($path));
        }
    }

    protected function files(): array
    {
        return File::names($this->target_path);
    }

    protected function load(string $path): array
    {
        $content = Pretty::make()->loadRaw($path);

        return json_decode($content, true);
    }
}
