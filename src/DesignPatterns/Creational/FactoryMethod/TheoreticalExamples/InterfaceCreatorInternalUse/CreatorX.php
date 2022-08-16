<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\InterfaceCreatorInternalUse;

/**
 * Please note: Naming this class "Creator" is used here for demonstration purposes only. Please read the main README
 * for Factory Method to better understand naming conventions.
 */
class CreatorX implements CreatorInterface
{
    public function __construct(
        private readonly string $stringProperty,
        private readonly int $integerProperty
    ) {
    }

    public function factoryMethod(): ProductInterface
    {
        return new ProductA(
            $this->stringProperty,
            $this->integerProperty
        );
    }

    public function universalOperation(): int
    {
        return 1;
    }

    /**
     * This operation uses the factory method to generate an object of ProductInterface, process it and return some
     * result.
     *
     * @return string
     */
    public function operationX(): string
    {
        $product = $this->factoryMethod();
        $result = 'The purpose of CreatorX is not to create Products, but it can use them.' . PHP_EOL;
        $result .= $product->method1() . PHP_EOL;
        $result .= $product->method2() . PHP_EOL;

        return $result;
    }
}
