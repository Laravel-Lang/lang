<?php

namespace LaravelLang\Lang\Concerns;

use Helldar\PrettyArray\Services\File;
use LaravelLang\Lang\Constants\Resource;

/** @mixin \LaravelLang\Lang\Processors\Todo\Processor */
trait Template
{
    protected array $templates = [];

    protected function getTemplate(string $filename): string
    {
        if ($this->templates[$filename] ?? false) {
            return $this->templates[$filename];
        }

        return $this->templates[$filename] = File::make()->loadRaw(
            $this->templatePath($filename)
        );
    }

    protected function templatePath(string $filename): string
    {
        return $this->app->resourcePath($filename);
    }

    protected function templateTable(): string
    {
        return $this->getTemplate(Resource::COMPONENT_TABLE);
    }

    protected function templateTableRow(): string
    {
        return $this->getTemplate(Resource::COMPONENT_TABLE_ROW);
    }

    protected function templateTabletColumn(): string
    {
        return $this->getTemplate(Resource::COMPONENT_TABLE_COLUMN);
    }

    protected function templateLink(): string
    {
        return $this->getTemplate(Resource::COMPONENT_LINK);
    }

    protected function templateTodo(): string
    {
        return $this->getTemplate(Resource::TODO);
    }

    protected function templateLocales(): string
    {
        return $this->getTemplate(Resource::LOCALE);
    }

    protected function templateList(): string
    {
        return $this->getTemplate(Resource::COMPONENT_LIST);
    }

    protected function templateListItem(): string
    {
        return $this->getTemplate(Resource::COMPONENT_LIST_ITEM);
    }

    protected function templateListItemJson(): string
    {
        return $this->getTemplate(Resource::COMPONENT_LIST_ITEM_JSON);
    }

    protected function templateAllTranslated(): string
    {
        return $this->getTemplate(Resource::COMPONENT_ALL_TRANSLATED);
    }
}
