<?php

namespace LaravelLang\Development\Services\Compilers;

use LaravelLang\Development\Constants\Resource;

class Table extends Compiler
{
    protected string $align = 'left';

    protected int $columns = 1;

    public function align(string $align): self
    {
        $this->align = $align;

        return $this;
    }

    public function columns(int $columns): self
    {
        $this->columns = $columns;

        return $this;
    }

    public function toString(): string
    {
        $width = $this->getWidth($this->getTableWidth());

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
        $width = $this->getWidth($this->getColumnWidth());

        return $this->template(Resource::COMPONENT_TABLE_COLUMN, compact('align', 'width', 'column'));
    }

    protected function getAlign(): string
    {
        $align = $this->align;

        return $this->template(Resource::COMPONENT_TABLE_ATTRIBUTE_ALIGN, compact('align'), true);
    }

    protected function getWidth(?int $width): ?string
    {
        if (! $width) {
            return null;
        }

        return $this->template(Resource::COMPONENT_TABLE_ATTRIBUTE_WIDTH, compact('width'), true);
    }

    protected function getTableWidth(): ?int
    {
        return $this->hasColumns() ? 100 : null;
    }

    protected function getColumnWidth(): ?int
    {
        return $this->hasColumns() ? round(100 / $this->getColumns()) : null;
    }

    protected function hasColumns(): bool
    {
        return $this->getColumns() > 1;
    }

    protected function getColumns(): int
    {
        return abs($this->columns);
    }
}
