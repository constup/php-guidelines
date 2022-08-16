<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\MoreThanOneFactoryMethod;

class AnotherProduct2 implements AnotherProductInterface
{
    public function anotherProductMethod(): string
    {
        return 'AnotherProduct2 does not have any connection with ProductInterface or any of its implementations.';
    }
}
