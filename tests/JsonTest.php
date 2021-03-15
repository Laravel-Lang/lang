<?php

namespace Tests;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Tests\TestCase as BaseTestCase;

final class JsonTest extends BaseTestCase
{
    protected $target_path = __DIR__ . '/../json';

    public function testJson(): void
    {
        $source = $this->source('en.json');

        foreach ($this->files() as $file) {
            $target = $this->load($this->target_path . '/' . $file);

            $this->assertSame(array_keys($source), array_keys($target));
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
