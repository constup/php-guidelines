<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution;

class Factory2 implements FactoryInterface
{
    public function produce(
        string $className,
        string $stringProperty,
        int $integerProperty
    ): ProductInterface {
        return new $className(
            'Factory2 adds some specific logic to object creation.' . PHP_EOL . $stringProperty,
            $integerProperty
        );
    }

    public function produceBasedOnParamValue(
        int $parameter,
        string $stringProperty,
        int $integerProperty
    ): ProductInterface {
        return match ($parameter) {
            3 => new ProductA($stringProperty, $integerProperty),
            4 => new ProductB($stringProperty, $integerProperty)
        };
    }
}
