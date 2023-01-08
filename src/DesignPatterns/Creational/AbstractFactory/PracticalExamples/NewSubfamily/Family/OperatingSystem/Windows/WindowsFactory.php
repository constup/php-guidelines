<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Windows;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\CheckboxInterface;

class WindowsFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new WindowsButton($label, $height, $width, $theme, 'windows');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new WindowsCheckbox($label, $theme, $enabled, 'windows');
    }
}
