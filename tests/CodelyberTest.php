<?php

declare(strict_types=1);

namespace CodelyTv\Tests;

use CodelyTv\Codelyber;
use PHPUnit\Framework\TestCase;

final class CodelyberTest extends TestCase
{
    /** @test */
    public function itShouldSayHelloWhenGreeting(): void
    {
        $codelyber = new Codelyber("Javi");

        self::assertEquals("CodelyTV", $codelyber->greet());
    }

    /** @test */
    public function checkEqualsAndSame(): void
    {
        $cb1 = new Codelyber('Dasua');
        $cb2 = new Codelyber('Dasua');
        $cb3 = $cb1;

        // Check Equals
        $this->assertEquals($cb2, $cb1);
        $this->assertEquals($cb2, $cb3);
        $this->assertEquals($cb3, $cb1);

        // Check Same
        $this->assertNotSame($cb2, $cb1);
        $this->assertNotSame($cb2, $cb3);
        $this->assertSame($cb3, $cb1);
    }
}
