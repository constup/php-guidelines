<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AdapterExtendsAdaptee;

class ClientService
{
    public function doSomething(TargetInterface $target): string
    {
        return 'ClientService->doSomething(): ' . $target->request();
    }
}
