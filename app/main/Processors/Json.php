<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;

final class Json extends Processor
{
    protected string $target_path = 'locales';

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            $target_path = $this->getTargetPath($locale . '/' . $locale . '.json');

            $this->process($target_path, 'en.json', $locale);
        }
    }

    protected function locales(): array
    {
        return Directory::names($this->getTargetPath());
    }
}
