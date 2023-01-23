<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\TheoreticalExamples;

class Decorator implements ComponentInterface
{
    public function __construct(
        protected readonly ComponentInterface $component
    ) {}

    public function doSomething(string $parameter): string
    {
        return "Decorator->doSomething() result.";
    }
}
