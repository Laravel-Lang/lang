<?php

use Helldar\PrettyArray\Services\File as Pretty;
use Helldar\PrettyArray\Services\Formatter;
use Helldar\Support\Concerns\Makeable;
use Helldar\Support\Facades\Helpers\Arr;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Helpers\Str;

require __DIR__ . '/../vendor/autoload.php';

abstract class Processor
{
    use Makeable;

    protected $source = [];

    protected $source_path = __DIR__ . '/en';

    protected $target_path;

    abstract public function run(): void;

    abstract protected function load(string $path): array;

    protected function compare(array $source, array $target, string $filename): array
    {
        $target = Arr::only($target, array_keys($source));

        $this->sort($source);
        $this->sort($target);

        if ($this->isValidation($filename)) {
            $custom     = $this->getFallbackValue($source, $target, 'custom');
            $attributes = $this->getFallbackValue($source, $target, 'attributes');

            $source = Arr::except($source, ['custom', 'attributes']);
            $target = Arr::except($target, ['custom', 'attributes']);

            return array_merge($source, $target, compact('custom', 'attributes'));
        }

        return array_merge($source, $target);
    }

    protected function process(string $target_path, string $filename): void
    {
        $source = $this->source($this->source_path, $filename);
        $target = $this->load($target_path);

        $content = $this->compare($source, $target, $filename);

        $this->store($target_path, $content);
    }

    protected function source(string $directory, string $filename): array
    {
        if ($this->source[$filename] ?? false) {
            return $this->source[$filename];
        }

        return $this->source[$filename] = $this->load($directory . '/' . $filename);
    }

    protected function getFallbackValue(array $source, array $target, string $key)
    {
        return Arr::get($target, $key) ?: Arr::get($source, $key, []);
    }

    protected function isValidation(string $filename): bool
    {
        return Str::startsWith($filename, 'validation');
    }

    protected function sort(array &$array): void
    {
        $array = Arr::ksort($array, static function ($current, $next) {
            $current = is_string($current) ? Str::lower($current) : $current;
            $next    = is_string($next) ? Str::lower($next) : $next;

            if ($current === $next) {
                return 0;
            }

            if (is_string($current) && is_numeric($next)) {
                return -1;
            }

            if (is_numeric($current) && is_string($next)) {
                return 1;
            }

            return $current < $next ? -1 : 1;
        });
    }

    protected function isJson(string $filename): bool
    {
        return Str::endsWith($filename, 'json');
    }

    protected function store(string $path, array $content): void
    {
        $this->isJson($path)
            ? $this->storeJson($path, $content)
            : $this->storePhp($path, $content);
    }

    protected function storeJson(string $path, array $content): void
    {
        Arr::storeAsJson($path, $content, false, JSON_UNESCAPED_UNICODE ^ JSON_PRETTY_PRINT);
    }

    protected function storePhp(string $path, array $content): void
    {
        $service = Formatter::make();
        $service->setEqualsAlign();

        Pretty::make($service->raw($content))->store($path);
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
}

Json::make()->run();
Php::make()->run();
