<?php

namespace LaravelLang\Lang\Services\Compilers;

use LaravelLang\Lang\Constants\Resource;

class Table extends Compiler
{
    protected string $align = 'left';

    protected int $width = 0;

    protected int $columns = 1;

    public function align(string $align): self
    {
        $this->align = $align;

        return $this;
    }

    public function width(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function columns(int $columns): self
    {
        $this->columns = $columns;

        return $this;
    }

    protected function handle(): string
    {
        $width = $this->getWidth($this->width ? 100 : 0);

        $content = $this->compileRows();

        return $this->template(Resource::COMPONENT_TABLE, compact('width', 'content'));
    }

    protected function compileRows(): string
    {
        $result = '';

        foreach ($this->items as $row) {
            $columns = '';

            foreach ($row as $value) {
                $columns .= $this->compileColumn($value);
            }

            $result .= $this->compileRow($columns);
        }

        return $result;
    }

    protected function compileRow(string $row): string
    {
        return $this->template(Resource::COMPONENT_TABLE_ROW, compact('row'));
    }

    protected function compileColumn(string $column): string
    {
        $align = $this->getAlign();
        $width = $this->getWidth($this->width ? round($this->width / $this->columns) : 0);

        return $this->template(Resource::COMPONENT_TABLE_COLUMN, compact('align', 'width', 'column'));
    }

    protected function getAlign(): string
    {
        $align = $this->align;

        return $this->template(Resource::COMPONENT_TABLE_ATTRIBUTE_ALIGN, compact('align'), true);
    }

    protected function getWidth(int $width): ?string
    {
        if (! $width) {
            return null;
        }

        return $this->template(Resource::COMPONENT_TABLE_ATTRIBUTE_WIDTH, compact('width'), true);
    }
}
