<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\AbstractCreatorInternalUse;

/**
 * Please note: Naming this class "Creator" is used here for demonstration purposes only. Please read the main README
 * for Factory Method to better understand naming conventions.
 */
abstract class Creator
{
    /**
     * Default implementation of the factoryMethod(). Child classes can override this and return their own instance of
     * ProductInterface.
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
        return new ProductB($stringParameter, $integerParameter);
    }

    /**
     * Creator's purpose in NOT to produce objects of ProductInterface. Its main purpose can be something entirely
     * different. This Creator has an example universalOperation() abstract method which Concrete Creators must
     * implement. It's a part of the real purpose of Concrete Creators.
     *
     * @return int
     */
    abstract public function universalOperation(): int;
}
