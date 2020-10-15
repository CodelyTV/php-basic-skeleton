<?php

declare(strict_types=1);

namespace CodelyTv\Tests;

use CodelyTv\Codelyber;
use PHPUnit\Framework\TestCase;

final class CodelyberTest extends TestCase
{
    private ?Codelyber $codelyber;
    private ?string    $greeting;

    public function tearDown(): void
    {
        parent::tearDown();

        $this->codelyber = null;
        $this->greeting  = null;
    }

    /** @test */
    public function shouldSayHelloWhenGreeting(): void
    {
        $this->givenACodelyber();

        $this->whenItGreets();

        $this->thenItShouldSayCodelyTv();
    }

    private function givenACodelyber(): void
    {
        $this->codelyber = new Codelyber("Javi");
    }

    private function whenItGreets(): void
    {
        $this->greeting = $this->codelyber->greet();
    }

    private function thenItShouldSayCodelyTv(): void
    {
        self::assertEquals("CodelyTV", $this->greeting);
    }
}
