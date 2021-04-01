<?php

namespace LaravelLang\Lang\Processors\Statuses;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Str;

final class Locales extends Processor
{
    protected function saving(): void
    {
        foreach ($this->locales as $locale => $items) {
            $count   = $this->countMissing($locale);
            $content = $this->compileList($items);

            $result = $this->replace($this->templateLocales(), compact('locale', 'count', 'content'));

            $filename = Str::slug($locale);

            $this->save($this->pathStatus($filename . '.md'), $result);
        }
    }

    protected function compileList(array $items): string
    {
        $list = '';

        foreach ($items as $filename => $values) {
            $content = $this->compileItems($values);

            $count = count($values);

            $list .= $this->replace($this->templateList(), compact('filename', 'count', 'content'));
        }

        return $list ?: $this->templateAllTranslated();
    }

    protected function compileItems(array $items): string
    {
        $content = '';

        foreach ($items as $key => $item) {
            $template = $key === $item ? $this->templateListItemJson() : $this->templateListItem();

            $content .= $this->replace($template, compact('key', 'item'));
        }

        return $content;
    }

    protected function ensureDirectory(): void
    {
        if (Directory::exists($this->pathStatus())) {
            Directory::delete($this->pathStatus());
        }

        Directory::make($this->pathStatus());
    }

    protected function pathStatus(string $filename = null): string
    {
        return $this->app->path('docs/statuses/' . $filename);
    }
}
