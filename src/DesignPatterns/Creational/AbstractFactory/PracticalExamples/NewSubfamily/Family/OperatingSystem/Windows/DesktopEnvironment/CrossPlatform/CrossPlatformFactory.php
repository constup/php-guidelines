<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Windows\DesktopEnvironment\CrossPlatform;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\CheckboxInterface;

class CrossPlatformFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new CrossPlatformButton($label, $height, $width, $theme, 'windows', 'crossplatform');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new CrossPlatformCheckbox($label, $theme, $enabled, 'windows', 'crossplatform');
    }
}
