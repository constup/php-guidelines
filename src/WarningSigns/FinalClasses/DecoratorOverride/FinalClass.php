<?php

declare(strict_types = 1);

namespace App\WarningSigns\FinalClasses\DecoratorOverride;

class FinalClass extends ExtendedClass implements ComponentInterface
{
    public function operation(): string
    {
        return 'FinalClass was called';
    }
}
