<?php

namespace LaravelLang\Development\Services\Compilers;

use DragonCode\Support\Facades\Helpers\Str;
use LaravelLang\Development\Constants\Resource;
use LaravelLang\Development\Models\Locale;

class Status extends Compiler
{
    protected int $columns = 6;

    public function toString(): string
    {
        return $this->template(Resource::STATUS, $this->getContent());
    }

    protected function grouped(): array
    {
        $locales = [];

        foreach ($this->items as $locale => $values) {
            $missing = count($values);

            $locales[] = Locale::make($locale, $missing);
        }

        return $this->group($locales);
    }

    protected function group(array $items): array
    {
        return array_map(function (array $items) {
            if ($this->columns > count($items)) {
                $need = $this->columns - count($items);

                $filled = array_fill(0, $need, Locale::make());

                return array_merge($items, $filled);
            }

            return $items;
        }, array_chunk($items, $this->columns));
    }

    protected function compileContent(): string
    {
        $rows = [];

        foreach ($this->grouped() as $items) {
            $rows[] = $this->mapRow($items);
        }

        return Table::make($this->app)
            ->items($rows)
            ->align('center')
            ->columns($this->columns)
            ->toString();
    }

    /**
     * @param \LaravelLang\Development\Models\Locale[]|array $items
     *
     * @return array
     */
    protected function mapRow(array $items): array
    {
        $row = [];

        foreach ($items as $item) {
            $row[] = $this->template(Resource::COMPONENT_LINK, [
                'title' => $item->getTitle(),
                'link'  => $this->link($item->getLocale()),
            ], return_empty: $item->isEmpty());
        }

        return $row;
    }

    protected function getContent(): array
    {
        $content = $this->compileContent();

        return array_merge(compact('content'), $this->extend);
    }

    protected function link(?string $value): string
    {
        return empty($value) ? '' : sprintf('statuses/%s.md', Str::slug($value));
    }
}
