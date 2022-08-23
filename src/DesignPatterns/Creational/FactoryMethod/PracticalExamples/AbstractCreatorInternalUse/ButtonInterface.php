<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\AbstractCreatorInternalUse;

/**
 * Product
 */
interface ButtonInterface
{
    public function __construct(
        string $label,
        int $height,
        int $width,
        string $theme
    );

    public function render(): string;
}
