<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\TheoreticalExamples;

class ConcreteComponent implements ComponentInterface
{
    public function doSomething(string $parameter): string
    {
        return "ConcreteComponent->doSomething() result.";
    }
}
