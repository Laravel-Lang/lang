<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Arr;

final class Json extends Base
{
    public function load(string $path): array
    {
        $content = Pretty::make()->loadRaw($path);

        return json_decode($content, true);
    }

    public function store(string $path, array|string $content): void
    {
        Arr::storeAsJson($path, $content, false, JSON_UNESCAPED_UNICODE ^ JSON_PRETTY_PRINT);
    }
}
