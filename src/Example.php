<?php

declare(strict_types=1);

namespace CodelyTv;

final class Example 
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function greet(): string
    {
        return "Hola ".$this->name;
    }
}