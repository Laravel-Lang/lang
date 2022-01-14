<?php

namespace LaravelLang\Development\Support;

use DragonCode\Support\Concerns\Makeable;
use Symfony\Component\Finder\Finder as SymfonyFinder;

class Finder
{
    use Makeable;

    protected array $names = ['*.php', '*.json', '*.js', '*.vue', '*.stub'];

    protected array $contains = ['__(', 'trans(', '@lang(', 'Lang::get('];

    protected array $files = [];

    public function __construct(
        protected SymfonyFinder $finder
    ) {
    }

    public function get(string|array $path): array
    {
        $this->search($path);

        return $this->files($path);
    }

    protected function search(string|array $path): void
    {
        foreach ($this->find($path) as $file) {
            $this->push($path, $file->getRealPath());
        }
    }

    protected function find(string|array $path): SymfonyFinder
    {
        return $this->finder()->in($path)->files()
            ->name($this->names)
            ->contains($this->contains);
    }

    protected function push(string|array $source, string $path): void
    {
        $this->files[$source][] = $path;
    }

    protected function files(string|array $path): array
    {
        return $this->files[$path] ?? [];
    }

    protected function finder(): SymfonyFinder
    {
        return clone $this->finder;
    }
}
