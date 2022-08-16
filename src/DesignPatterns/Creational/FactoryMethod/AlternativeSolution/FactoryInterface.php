<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution;

interface FactoryInterface
{
    public function produce(
        string $className,
        string $stringProperty,
        int $integerProperty
    ): ProductInterface;

    public function produceBasedOnParamValue(
        int $parameter,
        string $stringProperty,
        int $integerProperty
    ): ProductInterface;
}
