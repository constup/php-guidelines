<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\InterfaceCreatorInternalUse;

interface ProductInterface
{
    public function __construct(string $stringParameter, int $integerParameter);

    public function method1(): string;

    public function method2(): string;
}
