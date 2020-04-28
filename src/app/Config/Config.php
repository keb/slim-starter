<?php declare(strict_types = 1);

namespace App\Config;

class Config
{
    private $vars;

    public function __construct(array $vars)
    {
        $this->vars = $vars;
    }

    public function get(string $key): array
    {
        return $this->vars[$key];
    }
}