<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AmbiguousCall;

interface TargetInterface
{
    public function request(): string;
}
