<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\MoreThanOneFactoryMethod;

/**
 * Creators can have two or more Factory Methods which are producing completely different types of objects.
 *
 * Please note: Naming this interface "Creator" is used here for demonstration purposes only. Please read the main
 * README for Factory Method to better understand naming conventions.
 */
interface CreatorInterface
{
    public function factoryMethod1(
        string $stringParameter,
        int $integerParameter
    ): ProductInterface;

    public function factoryMethod2(): AnotherProductInterface;
}
