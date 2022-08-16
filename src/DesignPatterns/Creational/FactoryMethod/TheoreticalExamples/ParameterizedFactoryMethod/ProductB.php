<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\ParameterizedFactoryMethod;

class ProductB implements ProductInterface
{
    public function __construct(
        private readonly string $stringParameter,
        private readonly int $integerParameter
    ) {
    }

    public function method1(): string
    {
        return 'ProductB String value: ' . $this->stringParameter;
    }

    public function method2(): string
    {
        return 'ProductB Integer value: ' . $this->integerParameter;
    }
}
