<?php

namespace LaravelLang\Development\Processors;

use DragonCode\Support\Facades\Filesystem\Directory;
use LaravelLang\Development\Concerns\Template;
use LaravelLang\Development\Constants\Referents as Constants;
use LaravelLang\Development\Contracts\Stringable;
use LaravelLang\Development\Services\Compilers\Referents as Compilator;
use ReflectionClass;
use ReflectionClassConstant;

class Referents extends Processor
{
    use Template;

    protected string $target_path = 'locales';

    public function run(): void
    {
        $map = $this->map();

        $result = $this->compileContent($map);

        $this->store('docs/referents.md', $result);
    }

    protected function compileContent(array $items): Stringable
    {
        return Compilator::make($this->app)->items($items);
    }

    protected function map(): array
    {
        $locales = array_flip($this->locales());

        return array_merge($locales, $this->assignees());
    }

    protected function locales(): array
    {
        return Directory::names($this->getTargetPath());
    }

    protected function assignees(): array
    {
        $class = new ReflectionClass(Constants::class);

        return $class->getConstants(ReflectionClassConstant::IS_PUBLIC);
    }
}
