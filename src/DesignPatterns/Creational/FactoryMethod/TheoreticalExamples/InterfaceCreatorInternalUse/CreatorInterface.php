<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\InterfaceCreatorInternalUse;

/**
 * Please note: Naming this interface "Creator" is used here for demonstration purposes only. Please read the main
 * README for Factory Method to better understand naming conventions.
 */
interface CreatorInterface
{
    /**
     * Declaration of a Factory Method which all Concrete Creators must implement.
     *
     * @return ProductInterface
     */
    public function factoryMethod(): ProductInterface;

    /**
     * Creator's purpose in NOT to produce objects of ProductInterface. Its main purpose can be something entirely
     * different. This Creator interface has an example universalOperation() method which Concrete Creators must
     * implement. It's a part of the real purpose of Concrete Creators.
     *
     * @return int
     */
    public function universalOperation(): int;
}
