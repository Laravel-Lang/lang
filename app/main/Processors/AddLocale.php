<?php

declare(strict_types=1);

namespace LaravelLang\Development\Processors;

use DragonCode\Support\Facades\Filesystem\File;
use RuntimeException;

class AddLocale extends Processor
{
    protected string $target_path = 'locales';

    public function __construct(
        protected string $locale
    ) {
    }

    public function run(): void
    {
        $this->throwIfExists();
        $this->createFiles();
        $this->fillKeys();
    }

    protected function createFiles(): void
    {
        foreach ($this->files() as $file) {
            $target_path = $this->getTargetPath($this->locale . '/' . $file);

            $filename = $this->isMainJson($file) ? $this->locale . '.json' : $file;

            $this->process($target_path, $filename, $this->locale);
        }
    }

    protected function process(string $target_path, string $filename, ?string $locale = null): void
    {
        $this->store($target_path, [], $filename);
    }

    protected function throwIfExists(): void
    {
        $path = $this->getTargetPath($this->locale);

        if (is_dir($path)) {
            throw new RuntimeException("The localization with code {$this->locale} has already been created.");
        }
    }

    protected function fillKeys()
    {
        $this->app->processor(Keys::make($this->locale));
    }

    protected function files(): array
    {
        return File::names($this->getSourcePath());
    }
}
