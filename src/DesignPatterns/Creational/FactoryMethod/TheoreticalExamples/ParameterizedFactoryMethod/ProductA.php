<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\ParameterizedFactoryMethod;

class ProductA implements ProductInterface
{
    public function __construct(
        private readonly string $stringParameter,
        private readonly int $integerParameter,
    ) {
    }

    public function method1(): string
    {
        return 'ProductA String value: ' . $this->stringParameter;
    }

    public function method2(): string
    {
        return 'ProductA Integer value: ' . $this->integerParameter;
    }
}
