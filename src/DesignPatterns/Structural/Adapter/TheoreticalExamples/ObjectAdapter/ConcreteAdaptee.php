<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ObjectAdapter;

class ConcreteAdaptee implements AdapteeInterface
{
    public function specificRequest(): string
    {
        return 'ConcreteAdaptee->specificRequest() result.';
    }
}
