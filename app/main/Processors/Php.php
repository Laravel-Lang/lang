<?php

namespace LaravelLang\Lang\Processors;

use Helldar\Support\Facades\Helpers\Filesystem\File;

final class Php extends Processor
{
    protected string $target_path = 'locales';

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            foreach ($this->files($locale) as $file) {
                $target_path = $this->getTargetPath($locale . '/' . $file);

                $this->process($target_path, $file, $locale);
            }
        }
    }

    protected function files(string $locale): array
    {
        return File::names($this->getTargetPath($locale), fn ($filename) => $this->isPhp($filename));
    }
}
