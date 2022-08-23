<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\MoreThanOneFactoryMethod;

/**
 * Concrete Creator
 */
class WindowsUI extends AbstractUI
{
    public function checkboxFactoryMethod(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new WindowsCheckbox($label, $theme, $enabled);
    }

    public function applyTheme(): string
    {
        return 'Apply theme to Windows UI.';
    }

    public function renderWindowsForm(): string
    {
        $okButton = $this->buttonFactoryMethod(
            'Windows OK button',
            35,
            70,
            'default_dark_theme'
        );
        $cancelButton = $this->buttonFactoryMethod(
            'Windows Cancel button',
            35,
            70,
            'default_dark_theme'
        );

        $termsCheckbox = $this->checkboxFactoryMethod(
            'Windows Terms of Service Checkbox',
            'default_dark_theme',
            false
        );

        return $okButton->render() . PHP_EOL . $cancelButton->render() . PHP_EOL . $termsCheckbox->render();
    }
}
