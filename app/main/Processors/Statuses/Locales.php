<?php

namespace LaravelLang\Lang\Processors\Statuses;

use Helldar\Support\Facades\Helpers\Filesystem\Directory;
use Helldar\Support\Facades\Helpers\Str;
use LaravelLang\Lang\Constants\Resource;
use LaravelLang\Lang\Contracts\Stringable;
use LaravelLang\Lang\Services\Compilers\Collection;
use LaravelLang\Lang\Services\Compilers\Locale;

final class Locales extends Processor
{
    protected function saving(): void
    {
        foreach ($this->locales as $locale => $items) {
            $count   = $this->countMissing($locale);
            $content = $this->compileList($locale, $items);

            $result = $this->compileContent($content, $locale, $count);

            $filename = Str::slug($locale);

            $this->store($this->pathStatus($filename . '.md'), $result);
        }
    }

    protected function compileContent(string $content, string $locale, int $count): Stringable
    {
        return Locale::make($this->app)->items(compact('locale', 'count', 'content'));
    }

    protected function compileList(string $locale, array $items): string
    {
        $content = Collection::make($this->app)
            ->extend(compact('locale'))
            ->items($items)
            ->toString();

        return $content ?: $this->template(Resource::COMPONENT_ALL_TRANSLATED);
    }

    protected function ensureDirectory(): void
    {
        Directory::ensureDirectory($this->pathStatus(), can_delete: true);
    }

    protected function pathStatus(string $filename = null): string
    {
        return $this->app->path('docs/statuses/' . $filename);
    }
}
