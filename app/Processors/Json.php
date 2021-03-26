<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Facades\Helpers\Filesystem\File;

final class Json extends Processor
{
    protected string $target_path = 'json';

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            $target_path = $this->getTargetPath($locale);

            $this->process($target_path, 'en.json');
        }
    }

    protected function locales(): array
    {
        return File::names($this->getTargetPath());
    }
}
