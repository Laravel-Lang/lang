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
        $count_all        = $this->countAll();
        $count_translated = $this->countTranslated();

        $content = $this->compileContent();
        $status  = $this->compileStatus($count_all, $count_translated);

        return $this->template(Resource::STATUS, compact('content', 'status', 'count_all', 'count_translated'));
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

    protected function compileStatus(int $all, int $translated): int
    {
        return round(($translated / $all) * 100);
    }

    protected function countAll(): int
    {
        return count($this->items);
    }

    protected function countTranslated(): int
    {
        $filtered = array_filter($this->items, static fn ($value) => empty($value));

        return count($filtered);
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
