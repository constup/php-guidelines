<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\AbstractCreatorInternalUse;

/**
 * Concrete Creator
 */
class LinuxUI extends AbstractUI
{
    public function buttonFactoryMethod(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new LinuxButton($label, $height, $width, $theme);
    }

    public function applyTheme(): string
    {
        return 'Apply theme to Linux UI.';
    }

    public function renderLinuxButtons(): string
    {
        $okButton = $this->buttonFactoryMethod(
            'Linux OK button',
            20,
            60,
            'default_light_theme'
        );
        $cancelButton = $this->buttonFactoryMethod(
            'Linux Cancel button',
            20,
            60,
            'default_light_theme'
        );

        return $okButton->render() . PHP_EOL . $cancelButton->render();
    }
}
