<?php

namespace Tests\Development;

use DragonCode\Support\Facades\Filesystem\File;

class JsonTest extends TestCase
{
    public function testJson(): void
    {
        foreach ($this->files('.json') as $filename) {
            $source = $this->source($filename);

            foreach ($this->locales() as $locale) {
                $filename = $this->resolveFilename($filename, $locale);

                $path = $this->target_path . '/' . $locale . '/' . $filename;

                $target = $this->load($path);

                $this->assertSame(array_keys($source), array_keys($target), $this->messageForPath($path));
            }
        }
    }

    protected function load(string $path): array
    {
        $items = File::load($path);

        return $this->correctValues($items);
    }
}
