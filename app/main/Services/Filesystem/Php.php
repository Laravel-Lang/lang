<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\PrettyArray\Services\Formatter;
use LaravelLang\Lang\Contracts\Stringable;

final class Php extends Base
{
    public function load(string $path): array
    {
        return Pretty::make()->load($path);
    }

    public function store(string $path, array|string|Stringable $content): void
    {
        $service = Formatter::make();
        $service->setEqualsAlign();

        Pretty::make($service->raw($content))->store($path);
    }
}
