<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\Support\Facades\Helpers\Filesystem\File;
use LaravelLang\Lang\Contracts\Stringable;

final class Markdown extends Base
{
    public function store(string $path, array|string|Stringable $content): void
    {
        $content = $this->prepareToStore($content);

        File::store($path, $content);
    }
}
