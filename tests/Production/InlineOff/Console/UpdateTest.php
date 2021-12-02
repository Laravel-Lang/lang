<?php

declare(strict_types=1);

namespace Tests\Production\InlineOff\Console;

use Tests\Production\InlineOffTestCase;

class UpdateTest extends InlineOffTestCase
{
    public function testUpdate()
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

        $this->artisan('lang:update')->run();

        $this->refreshLocales();

        $this->assertSame('Foo', __('auth.failed'));
        $this->assertSame('The provided password is incorrect.', __('auth.password'));
        $this->assertSame('Unknown Foo', __('auth.unknown'));

        $this->assertSame('Foo', __('Hello'));
        $this->assertSame('Bar', __('World'));
        $this->assertSame('Name', __('Name'));
        $this->assertSame('Email', __('Email'));
        $this->assertSame('Unknown Foo', __('Unknown'));
    }
}
