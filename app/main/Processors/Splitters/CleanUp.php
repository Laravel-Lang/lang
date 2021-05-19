<?php

namespace LaravelLang\Lang\Processors\Splitters;

use Helldar\Support\Facades\Helpers\Arr;

final class CleanUp extends Processor
{
    protected string $target_path = 'locales';

    public function run(): void
    {
        $keys = $this->keys();

        foreach ($this->locales() as $locale) {
            $path = $this->main($locale);

            $items = $this->load($path);

            $content = Arr::except($items, $keys);

            $this->sort($content);

            $this->store($path, $content);
        }
    }

    protected function keys(): array
    {
        $keys = [];

        foreach ($this->files as $file) {
            $items = $this->source($file);

            $keys = array_merge($keys, $items);
        }

        return array_keys($keys);
    }

    protected function locales(): array
    {
        $locales = parent::locales();

        array_push($locales, 'en');

        return $locales;
    }
}
