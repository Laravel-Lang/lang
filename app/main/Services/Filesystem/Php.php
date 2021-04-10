<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\PrettyArray\Services\Formatter;
use Helldar\Support\Tools\Stub;
use LaravelLang\Lang\Contracts\Stringable;

final class Php extends Base
{
    public function load(string $path): array
    {
        $items = Pretty::make()->load($path);

        return $this->correctValues($items);
    }

    public function store(string $path, array|string|Stringable $content, bool $is_simple = false, string $stub = Stub::PHP_ARRAY): void
    {
        $service = Formatter::make();

        $is_simple
            ? $service->setSimple()
            : $service->setEqualsAlign();

        Pretty::make($service->raw($content))->store($path, $this->getStub($stub));
    }
}
