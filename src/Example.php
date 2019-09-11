<?php

declare(strict_types=1);

namespace Spawnia\PHPUnitAssertFiles;

class Example
{
    /**
     * @var string
     */
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function greet(): string
    {
        return "Hello $this->name";
    }
}
