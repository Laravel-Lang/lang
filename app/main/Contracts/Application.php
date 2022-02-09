<?php

namespace LaravelLang\Development\Contracts;

interface Application
{
    public function __construct(string $base_path);

    public function basePath(): string;

    public function sourcePath(?string $filename = null): string;

    public function localePath(?string $locale = null): string;

    public function excludePath(string $locale): string;

    public function resourcePath(string $filename): string;

    public function path(?string $path = null): string;

    public function cleanPath(?string $path = null): ?string;

    public function processor(Processable $processor): void;
}
