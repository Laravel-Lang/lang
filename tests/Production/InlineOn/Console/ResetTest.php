<?php

declare(strict_types=1);

namespace Tests\Production\InlineOn\Console;

use LaravelLang\Publisher\Exceptions\SourceLocaleDoesntExistsException;
use LaravelLang\Publisher\Facades\Helpers\Locales;
use Tests\Production\InlineOnTestCase;

class ResetTest extends InlineOnTestCase
{
    public function testAcceptConfirmation()
    {
        $this->artisan('lang:reset')
            ->expectsConfirmation('Do you want to reset all localizations?')
            ->expectsChoice('Select localizations to reset (specify the necessary localizations separated by commas):', $this->locale, Locales::installed())
            ->assertExitCode(0)
            ->run();
    }

    public function testUnknownLanguageFromCommand()
    {
        $this->expectException(SourceLocaleDoesntExistsException::class);
        $this->expectExceptionMessage('The source "foo" localization was not found.');

        $locales = 'foo';

        $this->artisan('lang:reset', compact('locales'))->run();
    }

    public function testReset()
    {
        $this->copyFixtures();

        $this->assertSame('Foo', __('auth.failed'));
        $this->assertSame('Bar', __('auth.password'));
        $this->assertSame('Unknown Foo', __('auth.unknown'));

        $this->assertSame('Foo', __('Hello'));
        $this->assertSame('Bar', __('World'));
        $this->assertSame('Baz', __('Name'));
        $this->assertSame('Baq', __('Email'));
        $this->assertSame('Unknown Foo', __('Unknown'));

        $this->artisan('lang:reset', [
            'locales' => $this->default,
        ])->run();

        $this->refreshLocales();

        $this->assertSame('These credentials do not match our records.', __('auth.failed'));
        $this->assertSame('The provided password is incorrect.', __('auth.password'));
        $this->assertSame('Unknown Foo', __('auth.unknown'));

        $this->assertSame('Foo', __('Hello'));
        $this->assertSame('Bar', __('World'));
        $this->assertSame('Name', __('Name'));
        $this->assertSame('Email', __('Email'));
        $this->assertSame('Unknown Foo', __('Unknown'));
    }

    public function testFull()
    {
        $this->copyFixtures();

        $this->assertSame('Foo', __('auth.failed'));
        $this->assertSame('Bar', __('auth.password'));
        $this->assertSame('Unknown Foo', __('auth.unknown'));

        $this->assertSame('Foo', __('Hello'));
        $this->assertSame('Bar', __('World'));
        $this->assertSame('Baz', __('Name'));
        $this->assertSame('Baq', __('Email'));
        $this->assertSame('Unknown Foo', __('Unknown'));

        $this->artisan('lang:reset', [
            'locales' => $this->default,
            '--full'  => true,
        ])->run();

        $this->refreshLocales();

        $this->assertSame('These credentials do not match our records.', __('auth.failed'));
        $this->assertSame('The provided password is incorrect.', __('auth.password'));
        $this->assertSame('auth.unknown', __('auth.unknown'));

        $this->assertSame('Hello', __('Hello'));
        $this->assertSame('World', __('World'));
        $this->assertSame('Name', __('Name'));
        $this->assertSame('Email', __('Email'));
        $this->assertSame('Unknown', __('Unknown'));
    }
}
