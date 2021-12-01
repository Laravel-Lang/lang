<?php

declare(strict_types=1);

namespace Tests\Production\InlineOff\Console;

use LaravelLang\Publisher\Exceptions\SourceLocaleDoesntExistsException;
use LaravelLang\Publisher\Facades\Helpers\Locales;
use Tests\Production\InlineOffTestCase;

class AddTest extends InlineOffTestCase
{
    public function testAcceptConfirmation()
    {
        $this->artisan('lang:add')
            ->expectsConfirmation('Do you want to add all localizations?')
            ->expectsChoice('Select localizations to add (specify the necessary localizations separated by commas):', $this->locale, Locales::available())
            ->assertExitCode(0)
            ->run();
    }

    public function testUnknownLanguageFromCommand()
    {
        $this->expectException(SourceLocaleDoesntExistsException::class);
        $this->expectExceptionMessage('The source "foo" localization was not found.');

        $locales = 'foo';

        $this->artisan('lang:add', compact('locales'))->run();
    }

    public function testInstall()
    {
        $this->copyFixtures();

        $this->assertSame('Foo', __('custom.hello'));
        $this->assertSame('Bar', __('custom.world'));
        $this->assertSame('Unknown Foo', __('custom.unknown'));

        $this->assertSame('Foo', __('Hello'));
        $this->assertSame('Bar', __('World'));
        $this->assertSame('Baz', __('Name'));
        $this->assertSame('Baq', __('Email'));
        $this->assertSame('Unknown Foo', __('Unknown'));

        $this->artisan('lang:add', [
            'locales' => $this->default,
        ])->run();

        $this->refreshLocales();

        $this->assertSame('Foo', __('custom.hello'));
        $this->assertSame('World!', __('custom.world'));
        $this->assertSame('Unknown Foo', __('custom.unknown'));

        $this->assertSame('Foo', __('Hello'));
        $this->assertSame('Bar', __('World'));
        $this->assertSame('Name', __('Name'));
        $this->assertSame('Email', __('Email'));
        $this->assertSame('Unknown Foo', __('Unknown'));
    }
}
