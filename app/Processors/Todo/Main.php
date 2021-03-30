<?php

namespace LaravelLang\Lang\Processors\Todo;

use LaravelLang\Lang\Models\Locale;

class Main extends Processor
{
    protected int $columns = 12;

    protected function save(): void
    {
        $items = $this->prepare();

        dd(
            $this->group($items)
        );
    }

    protected function prepare(): array
    {
        $content = [];

        foreach (array_keys($this->result) as $locale) {
            $missing = $this->countMissing($locale);

            $content[] = Locale::make($locale, $missing);
        }

        return $content;
    }

    protected function group(array $items): array
    {
        return array_map(function (array $items) {
            if (count($items) < $this->columns) {
                $need = $this->columns - count($items);

                $filled = array_fill(0, $need, Locale::make());

                return array_merge($items, $filled);
            }

            return $items;
        }, array_chunk($items, $this->columns));
    }
}
