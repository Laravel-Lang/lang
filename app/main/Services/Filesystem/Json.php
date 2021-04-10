<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Tools\Stub;
use LaravelLang\Lang\Contracts\Stringable;

final class Json extends Base
{
    public function load(string $path): array
    {
        $content = Pretty::make()->loadRaw($path);

        $items = json_decode($content, true);

        return $this->correctValues($items);
    }

    public function store(string $path, array|string|Stringable $content, bool $is_simple = false, string $stub = Stub::PHP_ARRAY): void
    {
        if ($is_simple) {
            $content = array_values($content);
        }

        Arr::storeAsJson($path, $content, false, JSON_UNESCAPED_UNICODE ^ JSON_PRETTY_PRINT);
    }
}
