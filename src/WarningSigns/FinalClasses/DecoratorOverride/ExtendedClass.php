<?php

declare(strict_types = 1);

namespace App\WarningSigns\FinalClasses\DecoratorOverride;

class ExtendedClass extends BaseClass implements ComponentInterface
{
    public function operation(): string
    {
        return 'ExtendedClass was called';
    }
}
