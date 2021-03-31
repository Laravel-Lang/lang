<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\Support\Facades\Helpers\Filesystem\File;

final class Markdown extends Base
{
    public function store(string $path, array|string $content): void
    {
        File::store($path, $content);
    }
}
