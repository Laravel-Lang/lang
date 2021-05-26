<?php

namespace LaravelLang\Lang\Support;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Str;

class Package
{
    protected ?string $path;

    protected array $filter = ['$', 'self::', 'static::', 'auth.', 'pagination.', 'passwords.', 'validation.'];

    public function __construct(
        protected Finder $finder,
        protected Parser $parser
    ) {
    }

    public function some(): self
    {
        return $this;
    }

    public function path(string $path): self
    {
        Directory::validate($path);

        $this->path = realpath($path);

        return $this;
    }

    public function content(): array
    {
        $files = $this->files();

        $items = $this->parsed($files);

        return $this->filter($items);
    }

    protected function files(): array
    {
        return $this->finder->get($this->path);
    }

    protected function parsed(array $files): array
    {
        return $this->parser->files($files)->get();
    }

    protected function filter(array $items): array
    {
        return array_filter(array_keys($items), fn ($value) => ! Str::contains($value, $this->filter));
    }
}
