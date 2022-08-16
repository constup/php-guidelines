<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\MoreThanOneFactoryMethod;

class AnotherProduct1 implements AnotherProductInterface
{
    public function anotherProductMethod(): string
    {
        return 'AnotherProduct1 does not have any connection with ProductInterface or any of its implementations.';
    }
}
