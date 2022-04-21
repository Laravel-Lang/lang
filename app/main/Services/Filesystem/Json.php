<?php

namespace LaravelLang\Development\Services\Filesystem;

use DragonCode\Support\Facades\Filesystem\File;
use DragonCode\Support\Tools\Stub;
use LaravelLang\Development\Contracts\Stringable;

class Json extends Base
{
    public function load(string $path): array
    {
        $items = File::load($path);

        return $this->correctValues($items);
    }

    public function store(string $path, array|string|Stringable $content, bool $is_simple = false, string $stub = Stub::PHP_ARRAY): void
    {
        if ($is_simple) {
            $content = array_values($content);
        }

        file_put_contents($path, json_encode($content, JSON_UNESCAPED_UNICODE ^ JSON_UNESCAPED_SLASHES ^ JSON_PRETTY_PRINT));
    }
}
