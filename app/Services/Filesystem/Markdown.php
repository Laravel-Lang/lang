<?php

namespace LaravelLang\Lang\Services\Filesystem;

use Helldar\PrettyArray\Services\File as PrettyFile;
use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Filesystem\File;
use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Contracts\Filesystem;

final class Markdown extends Base
{
    /** @var array|string[] */
    protected array $template = [];

    public function store(string $path, array $content): void
    {
        $lang = $this->lang($path);

        $items    = $this->compileItems($content);
        $template = $this->compileTemplate($items, count($content), $lang);

        File::store($path, $template);
    }

    public function prepare(): Filesystem
    {
        $path = $this->path();

        $this->delete($path);
        $this->create($path);

        return $this;
    }

    protected function delete(string $path): void
    {
        Directory::delete($path);
    }

    protected function create(string $path): void
    {
        Directory::make($path);
    }

    protected function path(): string
    {
        return $this->app->path('todo');
    }

    protected function compileItems(array $content): string
    {
        return implode(PHP_EOL, array_map(fn ($value) => Str::start($value, '* '), $content));
    }

    protected function compileTemplate(string $content, int $count, string $lang): string
    {
        $link = $this->link($lang);

        return Str::replace($this->templateMain(), compact('lang', 'count', 'link', 'content'), '{{%s}}');
    }

    protected function link(string $key): string
    {
        return Str::slug($key);
    }

    protected function lang(string $path): string
    {
        return pathinfo($path, PATHINFO_FILENAME);
    }

    protected function templateMain(): string
    {
        return $this->template('todo.stub');
    }

    protected function templateTableRow(): string
    {
        return $this->template('table-row.stub');
    }

    protected function templateTableColumn(): string
    {
        return $this->template('table-column.stub');
    }

    protected function templateLanguage(): string
    {
        return $this->template('language.stub');
    }

    protected function template(string $key): string
    {
        if ($this->template[$key] ?? false) {
            return $this->template[$key];
        }

        return $this->template[$key] = PrettyFile::make()->loadRaw(
            $this->app->path('resources/' . $key)
        );
    }
}
