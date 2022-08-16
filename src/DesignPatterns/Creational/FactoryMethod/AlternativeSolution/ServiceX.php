<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution;

class ServiceX implements ServiceInterface
{
    public function __construct(
        private readonly FactoryInterface $factory
    ) {
    }

    /**
     * This operation uses the factory method to generate an object of ProductInterface, process it and return some
     * result.
     *
     * @return string
     */
    public function operationX(): string
    {
        $product = $this->factory->produce(ProductA::class, 'test string value', 1);

        $result = 'This is ServiceX.' . PHP_EOL;
        $result .= $product->method1() . PHP_EOL;
        $result .= $product->method2() . PHP_EOL;

        return $result;
    }
}
