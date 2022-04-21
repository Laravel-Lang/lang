<?php

namespace LaravelLang\Development\Services\Filesystem;

use DragonCode\Support\Facades\Filesystem\File;
use DragonCode\Support\Tools\Stub;
use LaravelLang\Development\Contracts\Stringable;

class Markdown extends Base
{
    public function store(string $path, array|string|Stringable $content, bool $is_simple = false, string $stub = Stub::PHP_ARRAY): void
    {
        $content = $this->prepareToStore($content);

        File::store($path, $content);
    }
}
