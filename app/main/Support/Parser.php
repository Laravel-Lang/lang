<?php

namespace LaravelLang\Development\Support;

use DragonCode\Support\Concerns\Makeable;
use DragonCode\Support\Facades\Helpers\Arr;
use DragonCode\Support\Facades\Helpers\Str;

class Parser
{
    use Makeable;

    protected const REGEX = '/\b(__|trans|lang|Lang\:\:get)\(\r*\s*(.+)\r*\s*(\)|,\s?\[)/U';

    protected array $files = [];

    protected array $keys = [];

    public function files(array $files): self
    {
        $this->files = $files;

        return $this;
    }

    public function get(): array
    {
        $this->clear();
        $this->each();
        $this->sort();

        return $this->keys();
    }

    protected function clear(): void
    {
        $this->keys = [];
    }

    protected function each(): void
    {
        foreach ($this->files as $file) {
            $content = file_get_contents($file);

            $this->parse($content);
        }
    }

    protected function sort(): void
    {
        Arr::ksort($this->keys);
    }

    protected function parse(string $content): void
    {
        foreach ($this->match($content) as $match) {
            $value = $match;

            if (Str::contains((string) $value, ['__', 'trans', '@lang', 'Lang::get'])) {
                $sub_key = $this->subkey($value);

                $sub_value = $this->keys[$sub_key] ?? null;

                $this->push($sub_value);
            }

            $this->push($value);
        }
    }

    protected function match(string $content, string $pattern = self::REGEX): array
    {
        preg_match_all($pattern, $content, $matches);

        return $matches[2] ?? [];
    }

    protected function push(mixed $value): void
    {
        $value = $this->trim($value);

        if (! isset($this->keys[$value])) {
            $this->keys[$value] = $value;
        }
    }

    protected function subkey(string $value): string
    {
        $sub_key = $this->match($value)[0];

        return $this->trim($sub_key);
    }

    protected function keys(): array
    {
        return $this->keys;
    }

    protected function trim($value)
    {
        if (is_string($value)) {
            $chars = " \t\n\r\0\x0B'\"";

            return trim(stripslashes($value), $chars);
        }

        return $value;
    }
}
