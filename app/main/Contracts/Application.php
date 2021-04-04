<?php

namespace LaravelLang\Lang\Contracts;

interface Application
{
    public function __construct(string $base_path);

    public function basePath(): string;

    public function sourcePath(string $filename = null): string;

    public function path(string $path = null): string;

    public function excludePath(string $locale): string;

    public function resourcePath(string $filename): string;

    public function cleanPath(string $path = null): ?string;

    public function filesystem(Filesystem $filesystem): self;

    public function getFilesystem(): Filesystem;

    public function processor(Processable $processor, Filesystem $filesystem): void;
}
