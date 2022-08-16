<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\ParameterizedFactoryMethod;

/**
 * Please note: Naming this class "Creator" is used here for demonstration purposes only. Please read the main README
 * for Factory Method to better understand naming conventions.
 */
class CreatorY extends Creator
{
    public function __construct(
        private readonly string $stringProperty,
        private readonly int $integerProperty
    ) {
    }

    /**
     * An example of parameterized factory method. It returns a different instance of a ProductInterface based on the
     * value of $parameter.
     *
     * Factory Method Design Pattern does not define what logic will be inside the factory method itself. It only
     * defines that the return type of factory method must be Product's interface.
     *
     * Also note that the implementation/contents of the factory method does not have to be the same between Concrete
     * Creators which are extending/implementing the same Creator. Take a look at CreatorX to see the difference.
     *
     * @param int $parameter
     *
     * @return ProductInterface
     */
    public function factoryMethod(int $parameter): ProductInterface
    {
        return match ($parameter) {
            3 => new ProductA($this->stringProperty, $this->integerProperty),
            4 => new ProductB($this->stringProperty, $this->integerProperty)
        };
    }

    public function operationY(): string
    {
        $product = $this->factoryMethod(4); // this will return an instance of ProductB

        $result = 'The purpose of CreatorY is not to create Products, but it can use them.' . PHP_EOL;

        $result .= $product->method1() . PHP_EOL;
        $result .= $product->method2() . PHP_EOL;

        return $result;
    }
}
