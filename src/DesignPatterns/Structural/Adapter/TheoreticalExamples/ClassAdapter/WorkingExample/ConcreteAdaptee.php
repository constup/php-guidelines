<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\WorkingExample;

class ConcreteAdaptee
{
    public function specificRequest(): string
    {
        return 'ConcreteAdaptee->specificRequest() result.';
    }
}
