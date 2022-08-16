<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution;

interface ServiceInterface
{
    public function __construct(FactoryInterface $factory);
}
