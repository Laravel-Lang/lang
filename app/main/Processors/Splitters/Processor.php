<?php

namespace LaravelLang\Lang\Processors\Splitters;

use LaravelLang\Lang\Processors\Processor as BaseProcessor;

abstract class Processor extends BaseProcessor
{
    protected array $files = [
        'cashier.json',
        'fortify.json',
        'jetstream.json',
        'nova.json',
        'spark/paddle.json',
        'spark/stripe.json',
    ];

    protected function process(string $target_path, string $filename, string $locale = null): void
    {
        $main   = $this->load($this->main($locale));
        $target = $this->load($target_path);

        $content = $this->merge($main, $target, $filename);

        $this->sort($content);

        $this->store($target_path, $content);
    }

    protected function merge(array $source, array $target, string $filename): array
    {
        $source = $this->filter($source, $target);

        return array_merge($target, $source);
    }

    protected function main(?string $locale): string
    {
        return empty($locale) || $locale === 'en'
            ? $this->getSourcePath('main/main.json')
            : $this->getTargetPath($locale . '/main/main.json');
    }
}
