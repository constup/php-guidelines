<?php

declare(strict_types = 1);

namespace App\WarningSigns\FinalClasses\DecoratorOverride;

class ClientClass
{
    public function overrideFinalClass(): string
    {
        $finalClass = new FinalClass();
        $concreteDecorator = new ConcreteDecorator($finalClass);

        return $concreteDecorator->operation();
    }
}
