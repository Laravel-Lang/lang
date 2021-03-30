<?php

namespace LaravelLang\Lang\Models;

final class Locale extends Model
{
    public function __construct(
        protected string|null $locale = null,
        protected int|null $missing = null
    ) {
    }

    public function locale(): ?string
    {
        return $this->locale;
    }

    public function missing(): ?int
    {
        return $this->missing;
    }
}
