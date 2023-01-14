<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\Family\OperatingSystem\Windows;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\ScrollbarInterface;

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

    public function produceScrollbar(
        bool $visible,
        int $width,
        string $theme,
    ): ScrollbarInterface {
        return new WindowsScrollbar($visible, $width, $theme, 'windows');
    }
}
