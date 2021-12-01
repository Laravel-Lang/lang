<?php

namespace LaravelLang\Development\Concerns;

use DragonCode\Support\Facades\Helpers\Digit;
use DragonCode\Support\Facades\Helpers\Str;
use LaravelLang\Development\Services\Counter;

trait Countable
{
    protected array $count = [];

    protected string $count_prefix = 'count_';

    protected string $count_suffix = '_percents';

    protected string $count_suffix_all = 'all';

    protected function addCount(array $items, string $key = 'all'): void
    {
        $key = $this->countKeyPrefix($key);

        if (! isset($this->count[$key])) {
            $this->count[$key] = 0;
        }

        $this->count[$key] += $this->calcCount($items);
    }

    protected function getCount(string $key = 'all'): int
    {
        $key = $this->countKeyPrefix($key);

        return $this->count[$key];
    }

    protected function setCount(int $count, string $key = 'all'): void
    {
        $key = $this->countKeyPrefix($key);

        $this->count[$key] = $count;
    }

    protected function getCounts(): array
    {
        $this->calcPercents();
        $this->countToString();

        return $this->count;
    }

    protected function calcPercents(): void
    {
        $all = $this->getCount();

        $all_key = $this->countKeyPrefix($this->count_suffix_all);

        $items = $this->count;

        foreach ($items as $key => $value) {
            if ($key !== $all_key) {
                $value = $all - $value;

                $percent = $this->calcPercent($all, $value);

                $new_key = $this->countKeySuffix($key);

                $this->setCount($value, $key);
                $this->setCount($percent, $new_key);
            }
        }
    }

    protected function calcPercent(int $all, int $count): int
    {
        return round(($count / $all) * 100);
    }

    protected function countToString(): void
    {
        foreach ($this->count as &$value) {
            $value = $this->countFormat($value);
        }
    }

    protected function calcCount(int|array $value): int
    {
        return is_int($value) ? $value : Counter::make()->count($value);
    }

    protected function countKeyPrefix(string $key): string
    {
        return Str::start($key, $this->count_prefix);
    }

    protected function countKeySuffix(string $key): string
    {
        return Str::finish($key, $this->count_suffix);
    }

    protected function countFormat(int $count): string
    {
        return Digit::toShort($count);
    }
}
