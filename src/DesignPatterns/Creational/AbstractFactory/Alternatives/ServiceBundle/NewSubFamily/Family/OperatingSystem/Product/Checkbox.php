<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Product;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\Interfaces\Product\CheckboxInterface;

class Checkbox implements CheckboxInterface
{
    /**
     * @param string $label
     * @param string $theme
     * @param bool   $enabled
     * @param string $operatingSystem
     */
    public function __construct(
        public readonly string $label,
        public readonly string $theme,
        public readonly bool $enabled,
        public readonly string $operatingSystem,
    ) {
    }
}
