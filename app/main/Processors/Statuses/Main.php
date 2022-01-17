<?php

namespace LaravelLang\Development\Processors\Statuses;

use LaravelLang\Development\Contracts\Stringable;
use LaravelLang\Development\Services\Compilers\Status;

class Main extends Processor
{
    protected function saving(): void
    {
        $result = $this->compileContent($this->locales);

        $this->store('docs/status.md', $result);
    }

    protected function compileContent(array $items): Stringable
    {
        return Status::make($this->app)
            ->extend($this->getCounts())
            ->items($items);
    }
}
