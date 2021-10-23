<?php

declare(strict_types = 1);

namespace CodelyTv\PhpBootstrapTest;

use CodelyTv\Codelyber;
use PHPUnit\Framework\TestCase;

final class ExerciseTest extends TestCase
{
    /** @test */
    public function givenTwoDifferentCodelyberWhenTheyGreetThenTheySayTheSame(): void
    {
        $jose = new Codelyber("Jose");
        $marco = new Codelyber("Marco");
        self::assertSame($marco->greet(), $jose->greet(), 'Both people greets the same');
    }

    /** @test */
    public function givenATestcodelyberWhenItEqualsThenItShouldBeEquals(): void
    {
        $expected = new Codelyber("Jose");
        self::assertNotSame($expected, $this->getATestCodelyber(), 'Both codelybers are not the same');
        self::assertEquals($expected, $this->getATestCodelyber(), 'Both codelybers are equals');
    }

    private function getATestCodelyber(): Codelyber
    {
        return new Codelyber("Jose");
    }
}
