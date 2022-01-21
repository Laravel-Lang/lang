<?php

namespace LaravelLang\Development\Services\Compilers;

use LaravelLang\Development\Constants\Resource;

class Collection extends Compiler
{
    public function toString(): string
    {
        $result = '';

        foreach ($this->items as $filename => $values) {
            $is_json = $this->isJson($filename);

            $content = $this->compileItems($values, $is_json);

            $count = count($values);

            $result .= $this->compileLocale($content, $count, $filename);
        }

        return $result;
    }

    protected function compileLocale(string $content, int $count, string $filename): string
    {
        $basename = $this->basename($filename);

        return $this->template(Resource::COMPONENT_LOCALE, compact('count', 'basename', 'filename', 'content'));
    }

    protected function compileItems(array $items, bool $is_json = false): string
    {
        $rows = $this->split($items, $is_json);

        return Table::make($this->app)->items($rows)->toString();
    }

    protected function split(array $items, bool $is_json = false): array
    {
        return $is_json
            ? array_values(array_map(static fn ($key) => [$key], array_keys($items)))
            : array_values(array_map(static fn ($key, $value) => [$key, $value], array_keys($items), array_values($items)));
    }

    protected function basename(string $filename): string
    {
        return pathinfo($filename, PATHINFO_FILENAME);
    }
}
