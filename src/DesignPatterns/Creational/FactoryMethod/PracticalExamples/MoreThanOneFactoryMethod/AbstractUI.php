<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\MoreThanOneFactoryMethod;

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

    abstract public function checkboxFactoryMethod(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface;

    abstract public function applyTheme(): string;
}
