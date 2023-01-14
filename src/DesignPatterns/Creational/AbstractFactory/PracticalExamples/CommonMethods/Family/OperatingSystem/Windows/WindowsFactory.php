<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\Family\OperatingSystem\Windows;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ScrollbarInterface;

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
