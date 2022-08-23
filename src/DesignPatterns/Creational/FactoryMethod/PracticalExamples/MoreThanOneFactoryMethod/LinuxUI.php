<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\MoreThanOneFactoryMethod;

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

    public function checkboxFactoryMethod(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new LinuxCheckbox($label, $theme, $enabled);
    }

    public function applyTheme(): string
    {
        return 'Apply theme to Linux UI.';
    }

    public function renderLinuxForm(): string
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

        $termsCheckbox = $this->checkboxFactoryMethod(
            'Linux Terms of Service Checkbox',
            'default_light_theme',
            true
        );

        return $okButton->render() . PHP_EOL . $cancelButton->render() . PHP_EOL . $termsCheckbox->render();
    }
}
