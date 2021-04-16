<?php

namespace LaravelLang\Lang\Processors\Statuses;

use LaravelLang\Lang\Contracts\Stringable;
use LaravelLang\Lang\Services\Compilers\Status;

final class Main extends Processor
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
