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
}
