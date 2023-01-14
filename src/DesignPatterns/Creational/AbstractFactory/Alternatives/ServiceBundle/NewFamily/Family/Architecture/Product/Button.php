<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Product;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Interfaces\Product\ButtonInterface;

class Button implements ButtonInterface
{
    /**
     * @param string $label
     * @param int    $height
     * @param int    $width
     * @param string $theme
     * @param string $architecture
     */
    public function __construct(
        public readonly string $label,
        public readonly int $height,
        public readonly int $width,
        public readonly string $theme,
        public readonly string $architecture,
    ) {
    }
}
