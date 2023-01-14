<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Service;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\CheckboxInterface;

interface FamilyFactoryInterface
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
        string $addedProperty,
    ): ButtonInterface;

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface;
}
