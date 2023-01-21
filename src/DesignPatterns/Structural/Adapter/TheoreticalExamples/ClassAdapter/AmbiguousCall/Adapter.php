<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AmbiguousCall;

class Adapter extends ConcreteAdaptee implements TargetInterface
{
    public function request(): string
    {
        return parent::specificRequest();
    }
}
