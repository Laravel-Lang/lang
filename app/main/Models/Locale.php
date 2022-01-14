<?php

namespace LaravelLang\Development\Models;

use LaravelLang\Development\Constants\Machines;

class Locale extends Model
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
            $status = $this->getMissing() ? '❗' : '✔';

            $machine = $this->hasMachine() ? '&nbsp;🤖' : '';

            return $this->locale . '&nbsp;' . $status . $machine;
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

    protected function hasMachine(): bool
    {
        return in_array($this->locale, Machines::LOCALES, true);
    }
}
