<?php

namespace LaravelLang\Lang\Services\Filesystem;

use DragonCode\Support\Facades\Helpers\Filesystem\File;
use DragonCode\Support\Tools\Stub;
use LaravelLang\Lang\Contracts\Stringable;

class Markdown extends Base
{
    public function store(string $path, array|string|Stringable $content, bool $is_simple = false, string $stub = Stub::PHP_ARRAY): void
    {
        $content = $this->prepareToStore($content);

        File::store($path, $content);
    }
}
