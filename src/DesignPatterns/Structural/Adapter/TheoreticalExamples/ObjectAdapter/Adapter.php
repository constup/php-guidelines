<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ObjectAdapter;

class Adapter implements TargetInterface
{
    public function __construct(
        public readonly AdapteeInterface $adaptee
    ) {
    }

    public function request(): string
    {
        return $this->adaptee->specificRequest();
    }
}
