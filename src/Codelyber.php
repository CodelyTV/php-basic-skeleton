<?php

declare(strict_types=1);

namespace CodelyTv;

final class Codelyber
{
	private const string GREETING = 'CodelyTV';

	public function __construct(private readonly string $name)
	{
	}

	public function name(): string
	{
		return $this->name;
	}

	public function greet(): string
	{
		return self::GREETING;
	}
}
