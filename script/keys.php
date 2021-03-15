<?php

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\PrettyArray\Services\Formatter;
use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;

require __DIR__ . '/../vendor/autoload.php';

abstract class Processor
{
    use Makeable;

    protected $source = [];

    protected $source_path = __DIR__ . '/en';

    protected $target_path;

    abstract public function run(): void;

    abstract protected function load(string $path): array;

    abstract protected function store(string $path, array $content): void;

    protected function compare(array $source, array $target): array
    {
        $target = Arr::only($target, array_keys($source));

        return array_merge($source, $target);
    }

    protected function process(string $target_path, string $filename): void
    {
        $source = $this->source($this->source_path, $filename);
        $target = $this->load($target_path);

        $content = $this->compare($source, $target);

        $this->store($target_path, $content);
    }

    protected function source(string $directory, string $filename): array
    {
        if ($this->source[$filename] ?? false) {
            return $this->source[$filename];
        }

        return $this->source[$filename] = $this->load($directory . '/' . $filename);
    }
}

class Json extends Processor
{
    protected $target_path = __DIR__ . '/../json';

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            $target_path = realpath($this->target_path . '/' . $locale);

            $this->process($target_path, 'en.json');
        }
    }

    protected function locales(): array
    {
        return File::names($this->target_path);
    }

    protected function load(string $path): array
    {
        $content = Pretty::make()->loadRaw(realpath($path));

        return json_decode($content, true);
    }

    protected function store(string $path, array $content): void
    {
        Arr::storeAsJson($path, $content, true, JSON_UNESCAPED_UNICODE ^ JSON_PRETTY_PRINT);
    }
}

class Php extends Processor
{
    protected $target_path = __DIR__ . '/../src';

    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            foreach ($this->files($locale) as $file) {
                $target_path = $this->target_path . '/' . $locale . '/' . $file;

                $this->process($target_path, $file);
            }
        }
    }

    protected function files(string $locale): array
    {
        return File::names($this->target_path . '/' . $locale);
    }

    protected function locales(): array
    {
        return Directory::names($this->target_path);
    }

    protected function load(string $path): array
    {
        return Pretty::make()->load($path);
    }

    protected function store(string $path, array $content): void
    {
        $service = Formatter::make();
        $service->setEqualsAlign();

        Pretty::make($service->raw($content))->store($path);
    }
}

Json::make()->run();
Php::make()->run();
