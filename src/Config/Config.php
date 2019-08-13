<?php declare(strict_types = 1);

namespace App\Config;

class Config
{
    private $map;

    public function __construct(array $map)
    {
        $this->map = $map;
    }

    public function get(): array
    {
        return $this->map;
    }
}