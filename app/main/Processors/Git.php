<?php

namespace LaravelLang\Development\Processors;

use DragonCode\Support\Facades\Filesystem\Directory;

class Git extends Processor
{
    public function run(): void
    {
        foreach ($this->locales() as $locale) {
            dump($locale . '...');

            $this->checkout();
            $this->createBranch($locale);
            $this->add($locale);
            $this->commit($locale);
            $this->push($locale);
        }
    }

    protected function locales(): array
    {
        return Directory::names($this->getLocalesPath());
    }

    protected function checkout(): void
    {
        $this->git(sprintf('checkout "%s"', $this->getSourceBranchName()));
    }

    protected function add(string $locale): void
    {
        $this->git(sprintf('add locales/%s/*', $locale));
    }

    protected function commit(string $locale): void
    {
        $message = $this->getMessage($locale);

        $this->git(sprintf('commit -m "%s"', $message));
    }

    protected function push(string $locale): void
    {
        $repository = env('GIT_REPOSITORY', 'origin');

        $branch = $this->getTargetBranchName($locale);

        $this->git(sprintf('push --set-upstream %s %s', $repository, $branch));
    }

    protected function createBranch(string $locale): void
    {
        $source_branch = $this->getSourceBranchName();
        $target_branch = $this->getTargetBranchName($locale);

        $this->git(sprintf('checkout -b "%s" "%s"', $target_branch, $source_branch));
    }

    protected function git(string $command): void
    {
        $directory = $this->getGitDirectory();

        exec('git -C "' . $directory . '" ' . $command);
    }

    protected function getLocalesPath(): string
    {
        return $this->app->localePath();
    }

    protected function getGitDirectory(): string
    {
        $directory = $this->app->basePath();

        return realpath($directory);
    }

    protected function getSourceBranchName(): string
    {
        return env('GIT_SOURCE_BRANCH', 'main');
    }

    protected function getTargetBranchName(string $locale): string
    {
        $prefix = env('GIT_TARGET_BRANCH', 'patch');

        return sprintf('%s/%s/%s', $prefix, date('Y-m-d'), $locale);
    }

    protected function getMessage(string $locale): string
    {
        $message = env('GIT_MESSAGE');

        return sprintf($message, $locale);
    }
}
