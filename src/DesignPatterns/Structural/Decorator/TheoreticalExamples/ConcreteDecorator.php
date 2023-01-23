<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\TheoreticalExamples;

class ConcreteDecorator extends Decorator
{
    public function doSomething(string $parameter): string
    {
        return "ConcreteDecorator->doSomething() result.";
    }
}
