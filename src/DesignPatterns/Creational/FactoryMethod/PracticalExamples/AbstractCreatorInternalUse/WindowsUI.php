<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\AbstractCreatorInternalUse;

/**
 * Concrete Creator
 */
class WindowsUI extends AbstractUI
{
    public function applyTheme(): string
    {
        return 'Apply theme to Windows UI.';
    }

    public function renderWindowsButtons(): string
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

        return $okButton->render() . PHP_EOL . $cancelButton->render();
    }
}
