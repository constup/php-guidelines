<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\ParameterizedFactoryMethod;

/**
 * Please note: Naming this class "Creator" is used here for demonstration purposes only. Please read the main README
 * for Factory Method to better understand naming conventions.
 */
abstract class Creator
{
    abstract public function factoryMethod(int $parameter): ProductInterface;
}
