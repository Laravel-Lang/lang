<?php

namespace LaravelLang\Lang\Processors\Statuses;

use LaravelLang\Lang\Models\Locale;

class Main extends Processor
{
    protected int $columns = 8;

    protected function saving(): void
    {
        $rows = '';

        foreach ($this->grouped() as $items) {
            $rows .= $this->compileRow($items);
        }

        $content = $this->compileTable($rows);

        $result = $this->replace($this->templateStatus(), compact('content'));

        $this->save('docs/status.md', $result);
    }

    protected function grouped(): array
    {
        $locales = [];

        foreach (array_keys($this->locales) as $locale) {
            $missing = $this->countMissing($locale);

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

    protected function compileTable(string $content): string
    {
        return $this->replace($this->templateTable(), compact('content'));
    }

    /**
     * @param  \LaravelLang\Lang\Models\Locale[]|array  $items
     *
     * @return string
     */
    protected function compileRow(array $items): string
    {
        $row = $this->compileColumns($items);

        return $this->replace($this->templateTableRow(), compact('row'));
    }

    /**
     * @param  \LaravelLang\Lang\Models\Locale[]|array  $items
     *
     * @return string
     */
    protected function compileColumns(array $items): string
    {
        $row = '';

        foreach ($items as $item) {
            $column = $this->replace($this->templateLink(), [
                'title' => $item->getTitle(),
                'link'  => $this->link($item->getLocale()),
            ], $item->isEmpty());

            $width = round(100 / $this->columns);

            $row .= $this->replace($this->templateTabletColumn(), compact('column', 'width'));
        }

        return $row;
    }
}
