<?php

namespace LaravelLang\Lang\Support;

use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Str;

class Parser
{
    use Makeable;

    protected const REGEX = '/(__|trans|@lang|Lang\:\:get)\((.+)(\)|,\s?\[)/U';

    protected array $files = [];

    protected array $keys = [];

    public function files(array $files): self
    {
        $this->files = $files;

        return $this;
    }

    public function get(): array
    {
        $this->each();
        $this->sort();

        return $this->keys();
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
            [$key, $value] = $this->split($match);

            if (Str::contains((string) $value, ['__', 'trans', '@lang', 'Lang::get'])) {
                $sub_key = $this->subkey($value);

                $value = $this->keys[$sub_key] ?? null;
            }

            $this->push($key, $value);
        }
    }

    protected function match(string $content, string $pattern = self::REGEX): array
    {
        preg_match_all($pattern, $content, $matches);

        return $matches[2] ?? [];
    }

    protected function split(string $value): array
    {
        $split = explode(',', $value);

        $key   = $this->trim($split[0]);
        $value = $this->trim($split[1] ?? null);

        return [$key, $value];
    }

    protected function push(string $key, $value): void
    {
        if (! isset($this->keys[$key])) {
            $this->keys[$key] = $this->isKeyCollision($value) ? null : $value;
        }
    }

    protected function subkey(string $value): string
    {
        $sub_key = $this->match($value, self::REGEX)[0];

        return trim($sub_key, " \t\n\r\0\x0B,()");
    }

    protected function isKeyCollision($value): bool
    {
        return Str::contains((string) $value, ['(', ')', '\'', '"']);
    }

    protected function keys(): array
    {
        return $this->keys;
    }

    protected function trim($value)
    {
        $chars = " \t\n\r\0\x0B'\"";

        return is_string($value) ? trim($value, $chars) : $value;
    }
}
