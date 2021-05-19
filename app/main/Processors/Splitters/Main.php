<?php

namespace LaravelLang\Lang\Processors\Splitters;

final class Main extends Processor
{
    public function run(): void
    {
        foreach ($this->files as $filename) {
            $this->process($this->getSourcePath($filename), $filename);
        }
    }
}
