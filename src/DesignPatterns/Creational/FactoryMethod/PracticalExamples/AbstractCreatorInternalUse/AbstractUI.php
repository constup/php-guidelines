<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\AbstractCreatorInternalUse;

/**
 * Creator
 */
abstract class AbstractUI
{
    public function buttonFactoryMethod(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new WindowsButton($label, $height, $width, $theme);
    }

    abstract public function applyTheme(): string;
}
