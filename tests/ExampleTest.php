<?php

declare(strict_types=1);

namespace CodelyTv\Tests;

use CodelyTv\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase 
{
    /** @test */ 
    public function itShouldGreetingByName(): void
    {
        $example = new Example("Jaime");

        self::assertEquals("Hola Jaime", $example->greet());
    }

    /** @test */
    public function itShouldGreetingByNameFromSameClass(): void
    {
        $example = new Example("Jaime");
        $example2 = $example;

        self::assertSame($example, $example2);

    }
}
