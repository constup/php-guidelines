<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Product;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\ScrollbarInterface;

class Scrollbar implements ScrollbarInterface
{
    public function __construct(
        public readonly int $width,
        public readonly bool $visible,
        public readonly string $theme,
        public readonly string $operatingSystem,
    ) {
    }
}
