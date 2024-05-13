<?php

declare(strict_types=1);

namespace CodelyTv\Tests;

use CodelyTv\Codelyber;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class CodelyberTest extends TestCase
{
	#[Test] public function itShouldSayHelloWhenGreeting(): void
	{
		$codelyber = new Codelyber('Javi');

		$this->assertEquals('CodelyTV', $codelyber->greet());
	}
}
