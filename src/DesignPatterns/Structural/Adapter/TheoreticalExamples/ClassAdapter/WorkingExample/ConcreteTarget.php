<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\WorkingExample;

class ConcreteTarget implements TargetInterface
{
    public function request(): string
    {
        return 'ConcreteTarget->request() result.';
    }
}
