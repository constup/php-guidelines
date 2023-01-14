<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\OperatingSystem\Windows;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\CheckboxInterface;

class WindowsFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
    ): ButtonInterface {
        return new WindowsButton($label, $height, $width, $theme, 'windows');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled,
    ): CheckboxInterface {
        return new WindowsCheckbox($label, $theme, $enabled, 'windows');
    }
}
