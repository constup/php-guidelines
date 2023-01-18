<?php

declare(strict_types = 1);

namespace App\Tests\WarningSigns\FinalClasses\DecoratorOverride;

use App\WarningSigns\FinalClasses\DecoratorOverride\ClientClass;
use PHPUnit\Framework\TestCase;

class ClientClassTest extends TestCase
{
    public function testOverrideFinalClass()
    {
        $mock = $this->getMockBuilder(ClientClass::class)
            ->disableOriginalConstructor()
            ->onlyMethods([])
            ->getMock();
        $expected = "FinalClass was called... but it's extended by a Decorator. ... and extended by another concrete Decorator.";

        $result = $mock->overrideFinalClass();
        $this->assertEquals($expected, $result);
    }
}
