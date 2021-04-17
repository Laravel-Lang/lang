<?php

namespace LaravelLang\Lang\Services;

use Helldar\Support\Concerns\Makeable;

final class Counter
{
    use Makeable;

    protected int $count = 0;

    public function count(array $items): int
    {
        $this->calculate($items);

        return $this->count;
    }

    protected function calculate(array $items): void
    {
        foreach ($items as $item) {
            is_array($item) ? $this->calculate($item) : $this->count++;
        }
    }
}
