<?php

namespace LaravelLang\Development\Processors\Statuses;

use LaravelLang\Development\Facades\Translate;
use Throwable;

class Translator extends Processor
{
    protected function saving(): void
    {
        foreach ($this->locales as $locale => $items) {
            foreach ($items as $filename => $values) {
                dump(sprintf('[%s] %s...', $locale, $filename));

                $filename = $this->restoreFilename($locale, $filename);

                $this->translateKeys($locale, $filename, $values);
            }
        }
    }

    protected function translateKeys(string $locale, string $filename, array $items): void
    {
        try {
            foreach ($items as &$item) {
                $item = $this->translate($locale, $item);
            }
        } catch (Throwable $e) {
            dump($e->getMessage());
        } finally {
            $this->storing($locale, $filename, $items);
        }
    }

    protected function storing(string $locale, string $filename, array $items): void
    {
        $target_path = $this->getLocalePath($locale) . '/' . $filename;

        $source = $this->source($filename);
        $target = $this->target($locale, $filename);

        $target = array_merge($target, $items);

        $content = $this->merge($source, $target, $filename);

        $this->store($target_path, $content, $filename);
    }

    protected function translate(string $locale, string $text): string
    {
        $map = [];

        $transformed = $this->transformText($text, $map);

        $translated = Translate::translate($locale, $transformed);

        return $this->restoreText($translated, $map);
    }

    protected function transformText(string $text, array &$map): string
    {
        preg_match_all('/:[a-z]+/', $text, $matches);

        foreach ($matches as $match) {
            foreach ($match as $key) {
                $map[$key] = $this->getRandomValue($map);
            }
        }

        return $this->transformReplace($text, $map);
    }

    protected function restoreText(string $text, array $map): string
    {
        return $this->transformReplace($text, array_flip($map));
    }

    protected function transformReplace(string $text, array $items): string
    {
        return str_replace(array_keys($items), array_values($items), $text);
    }

    protected function getRandomValue(array $items): int
    {
        $random = random_int(1000, 9999);

        return in_array($random, $items, true) ? $this->getRandomValue($items) : $random;
    }

    protected function restoreFilename(string $locale, string $filename): string
    {
        return match (true) {
            $this->isMainJson($filename) => $locale . '.json',
            $this->isJson($filename)     => $filename . '.json',
            default                      => $filename . '.php',
        };
    }
}
