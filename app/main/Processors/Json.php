<?php

namespace LaravelLang\Lang\Processors;

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
}
