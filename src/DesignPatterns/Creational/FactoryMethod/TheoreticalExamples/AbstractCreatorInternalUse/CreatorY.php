<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\AbstractCreatorInternalUse;

/**
 * Please note: Naming this class "Creator" is used here for demonstration purposes only. Please read the main README
 * for Factory Method to better understand naming conventions.
 *
 * factoryMethod() is inherited from the parent abstract class.
 */
class CreatorY extends Creator
{
    public function universalOperation(): int
    {
        return 2;
    }

    /**
     * This operation uses the factory method to generate an object of ProductInterface, process it and return some
     * result.
     *
     * @return string
     */
    public function operationY(): string
    {
        $result = 'The purpose of CreatorY is not to create Products, but it can use them.' . PHP_EOL;

        $product = $this->factoryMethod('test string from creator y', 2);
        $result .= $product->method1() . PHP_EOL;
        $result .= $product->method2() . PHP_EOL;

        return $result;
    }
}
