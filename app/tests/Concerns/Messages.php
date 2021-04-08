<?php

namespace Tests\Concerns;

trait Messages
{
    protected function messageAssertSee(string $path, string $content): string
    {
        return sprintf('String "%s" was not found in file %s', $content, realpath($path));
    }

    protected function messageAssertDoesntSee(string $path, string $content): string
    {
        return sprintf('String "%s" was found in file %s', $content, realpath($path));
    }

    protected function messageForPath(string $path): string
    {
        return sprintf('Problem found in file: %s', realpath($path));
    }

    protected function messageForLocale(string $path, string $locale): string
    {
        return sprintf('Found a problem with localization of "%s" in file %s', realpath($path), $locale);
    }
}
