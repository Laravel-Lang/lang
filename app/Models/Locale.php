<?php

namespace LaravelLang\Lang\Models;

final class Locale extends Model
{
    public function __construct(
        protected ?string $locale = null,
        protected ?int $missing = 0
    ) {
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function getTitle(): ?string
    {
        if (! $this->isEmpty()) {
            $suffix = $this->getMissing() ? '❗' : '✔';

            return $this->locale . '&nbsp;' . $suffix;
        }

        return null;
    }

    public function getMissing(): ?int
    {
        return $this->missing;
    }

    public function isEmpty(): bool
    {
        return empty($this->locale);
    }
}
