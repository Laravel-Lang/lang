<?php

namespace LaravelLang\Lang\Services\Compilers;

use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Constants\Resource;
use LaravelLang\Lang\Models\Locale;

class Status extends Compiler
{
    protected int $columns = 8;

    public function toString(): string
    {
        $content = $this->compileContent();

        return $this->template(Resource::STATUS, compact('content'));
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
            if (count($items) < $this->columns) {
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
     * @param  \LaravelLang\Lang\Models\Locale[]|array  $items
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

    protected function link(?string $value): string
    {
        return empty($value) ? '' : sprintf('statuses/%s.md', Str::slug($value));
    }
}
