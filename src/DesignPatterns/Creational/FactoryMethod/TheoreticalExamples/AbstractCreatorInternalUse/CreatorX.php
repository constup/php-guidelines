<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\AbstractCreatorInternalUse;

/**
 * Please note: Naming this class "Creator" is used here for demonstration purposes only. Please read the main README
 * for Factory Method to better understand naming conventions.
 */
class CreatorX extends Creator
{
    /**
     * factoryMethod() in this class overrides the one in its parent abstract class. It will return an instance of
     * ProductA instead of a default ProductB (defined in the parent class)
     *
     * @param string $stringParameter
     * @param int    $integerParameter
     *
     * @return ProductInterface
     */
    public function factoryMethod(
        string $stringParameter,
        int $integerParameter
    ): ProductInterface {
        return new ProductA($stringParameter, $integerParameter);
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
        $result = 'The purpose of CreatorX is not to create Products, but it can use them.' . PHP_EOL;

        $product = $this->factoryMethod('test string from creator x', 1);
        $result .= $product->method1() . PHP_EOL;
        $result .= $product->method2() . PHP_EOL;

        return $result;
    }
}
