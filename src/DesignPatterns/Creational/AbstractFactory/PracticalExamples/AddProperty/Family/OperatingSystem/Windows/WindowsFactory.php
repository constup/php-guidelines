<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\Family\OperatingSystem\Windows;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\CheckboxInterface;

class WindowsFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
        string $addedProperty,
    ): ButtonInterface {
        return new WindowsButton($label, $height, $width, $theme, 'windows', $addedProperty);
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled,
    ): CheckboxInterface {
        return new WindowsCheckbox($label, $theme, $enabled, 'windows');
    }
}
