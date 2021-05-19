<?php

namespace LaravelLang\Lang\Processors\Splitters;

final class Locales extends Processor
{
    protected string $target_path = 'locales';

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            $this->handle($locale);
        }
    }

    protected function handle(string $locale)
    {
        foreach ($this->files as $filename) {
            $path = $this->splitTargetPath($locale, $filename);

            $this->process($path, $filename, $locale);
        }
    }

    protected function splitTargetPath(string $locale, string $filename): string
    {
        return $this->getTargetPath($locale . '/' . $filename);
    }
}
