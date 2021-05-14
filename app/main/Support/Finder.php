<?php

namespace LaravelLang\Lang\Support;

use Helldar\Support\Concerns\Makeable;
use Symfony\Component\Finder\Finder as SymfonyFinder;

class Finder
{
    use Makeable;

    protected array $names = ['*.php', '*.json', '*.js', '*.vue'];

    protected array $contains = ['__(', 'trans(', '@lang(', 'Lang::get('];

    protected array $files = [];

    public function __construct(
        protected SymfonyFinder $instance
    ) {
    }

    public function get(string|array $path): array
    {
        $this->search($path);

        return $this->files();
    }

    protected function search(string|array $path): void
    {
        foreach ($this->find($path) as $file) {
            $this->push($file->getRealPath());
        }
    }

    protected function find(string|array $path): SymfonyFinder
    {
        return $this->instance->in($path)->files()
            ->name($this->names)
            ->contains($this->contains);
    }

    protected function push(string $path): void
    {
        $this->files[] = $path;
    }

    protected function files(): array
    {
        return $this->files;
    }
}
