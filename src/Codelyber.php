<?php

declare(strict_types=1);

namespace CodelyTv;

final class Codelyber
{
    private const string GREETING = "CodelyTV";

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
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
