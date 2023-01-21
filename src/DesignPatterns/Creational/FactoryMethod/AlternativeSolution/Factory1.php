<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution;

class Factory1 implements FactoryInterface
{
    public function produce(
        string $className,
        string $stringProperty,
        int $integerProperty
    ): ProductInterface {
        return new $className($stringProperty, $integerProperty);
    }

    public function produceBasedOnParamValue(
        int $parameter,
        string $stringProperty,
        int $integerProperty
    ): ProductInterface {
        return match ($parameter) {
            1 => new ProductA($stringProperty, $integerProperty),
            2 => new ProductB($stringProperty, $integerProperty)
        };
    }
}
