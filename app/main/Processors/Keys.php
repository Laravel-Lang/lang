<?php

namespace LaravelLang\Development\Processors;

use DragonCode\Support\Facades\Filesystem\File;

class Keys extends Processor
{
    protected string $target_path = 'locales';

    public function __construct(
        protected ?string $locale = null
    ) {
    }

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            foreach ($this->files($locale) as $file) {
                $target_path = $this->getTargetPath($locale . '/' . $file);

                $filename = $this->isMainJson($file) ? 'en.json' : $file;

                $this->process($target_path, $filename, $locale);
            }
        }
    }

    protected function files(string $locale): array
    {
        return File::names($this->getTargetPath($locale));
    }

    protected function locales(): array
    {
        if ($this->locale) {
            return [$this->locale];
        }

        return parent::locales();
    }
}
