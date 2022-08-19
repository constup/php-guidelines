<?php

declare(strict_types = 1);

namespace App\WarningSigns\FinalClasses\DecoratorOverride;

class ConcreteDecorator extends Decorator implements ComponentInterface
{
    public function operation(): string
    {
        return parent::operation() . ' ... and extended by another concrete Decorator.';
    }
}
