<?php

declare(strict_types=1);

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;
use TheDagofugo\DagoIcons\BladeDagoIconsServiceProvider;

class CompilesIconsTest extends TestCase
{
    #[Test]
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('dago-admin-s')->toHtml();

        $expected = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path id="path6" d="M12,1,3,5v6c0,5.55,3.84,10.74,9,12,5.16-1.26,9-6.45,9-12V5Zm0,3.9a3,3,0,1,1-3,3A3,3,0,0,1,12,4.9Zm0,7.9c2,0,6,1.09,6,3.08a7.2,7.2,0,0,1-12,0C6,13.89,10,12.8,12,12.8Z"/></svg>';

        $this->assertSame($expected, $result);
    }

    #[Test]
    public function it_can_add_classes_to_icons()
    {
        $result = svg('dago-admin-s', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = '<svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path id="path6" d="M12,1,3,5v6c0,5.55,3.84,10.74,9,12,5.16-1.26,9-6.45,9-12V5Zm0,3.9a3,3,0,1,1-3,3A3,3,0,0,1,12,4.9Zm0,7.9c2,0,6,1.09,6,3.08a7.2,7.2,0,0,1-12,0C6,13.89,10,12.8,12,12.8Z"/></svg>';

        $this->assertSame($expected, $result);
    }

    #[Test]
    public function it_can_add_styles_to_icons()
    {
        $result = svg('dago-admin-s', ['style' => 'color: #555'])->toHtml();

        $expected = '<svg style="color: #555" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path id="path6" d="M12,1,3,5v6c0,5.55,3.84,10.74,9,12,5.16-1.26,9-6.45,9-12V5Zm0,3.9a3,3,0,1,1-3,3A3,3,0,0,1,12,4.9Zm0,7.9c2,0,6,1.09,6,3.08a7.2,7.2,0,0,1-12,0C6,13.89,10,12.8,12,12.8Z"/></svg>';

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeDagoIconsServiceProvider::class,
        ];
    }
}
