<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\MoreThanOneFactoryMethod;

/**
 * Concrete Product
 */
class WindowsButton implements ButtonInterface
{
    public function __construct(
        private readonly string $label,
        private readonly int $height,
        private readonly int $width,
        private readonly string $theme
    ) {
    }

    public function render(): string
    {
        return "Render WindowsButton. Label: $this->label. Height: $this->height. Width: $this->width. Theme: $this->theme.";
    }
}
