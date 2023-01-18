<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ObjectAdapter;

interface AdapteeInterface
{
    public function specificRequest(): string;
}
