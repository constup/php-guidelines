<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\OriginalExample\Family\OperatingSystem\Product;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\OriginalExample\Family\Interfaces\Product\ButtonInterface;

class Button implements ButtonInterface
{
    /**
     * @param string $label
     * @param int    $height
     * @param int    $width
     * @param string $theme
     * @param string $operatingSystem
     */
    public function __construct(
        public readonly string $label,
        public readonly int $height,
        public readonly int $width,
        public readonly string $theme,
        public readonly string $operatingSystem,
    ) {
    }
}
