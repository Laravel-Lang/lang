<?php

namespace LaravelLang\Development\DataTransferObjects;

use DragonCode\SimpleDataTransferObject\DataTransferObject;

class PackageDTO extends DataTransferObject
{
    public string $filename;

    public bool $replace = true;

    public array $copy_files = [];

    protected $map = [
        'filename',
        'replace',
        'copy_files',
    ];

    protected function castReplace(?bool $can): bool
    {
        return $can !== false;
    }

    protected function castCopyFiles(array|string|null $files): array
    {
        return (array) ($files ?? []);
    }
}
