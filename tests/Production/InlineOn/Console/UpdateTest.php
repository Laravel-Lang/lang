<?php

declare(strict_types=1);

namespace Tests\Production\InlineOn\Console;

use Tests\Production\InlineOnTestCase;

class UpdateTest extends InlineOnTestCase
{
    public function testUpdate()
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

        $this->artisan('lang:update')->run();

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
