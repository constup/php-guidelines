<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Service;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\ScrollbarInterface;

interface FamilyFactoryInterface
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface;

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface;

    public function produceScrollbar(
        int $width,
        bool $visible,
        string $theme,
    ): ScrollbarInterface;
}
