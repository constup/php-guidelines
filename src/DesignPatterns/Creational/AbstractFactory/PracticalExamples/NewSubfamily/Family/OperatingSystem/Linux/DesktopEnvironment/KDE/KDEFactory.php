<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Linux\DesktopEnvironment\KDE;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\CheckboxInterface;

class KDEFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new KDEButton($label, $height, $width, $theme, 'linux', 'kde');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new KDECheckbox($label, $theme, $enabled, 'linux', 'kde');
    }
}
