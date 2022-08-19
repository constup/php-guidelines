<?php

declare(strict_types = 1);

namespace App\WarningSigns\FinalClasses\DecoratorOverride;

class BaseClass implements ComponentInterface
{
    public function operation(): string
    {
        return 'BaseClass was called.';
    }
}
