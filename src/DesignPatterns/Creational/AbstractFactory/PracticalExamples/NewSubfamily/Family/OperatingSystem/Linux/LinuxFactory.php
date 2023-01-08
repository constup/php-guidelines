<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Linux;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\CheckboxInterface;

class LinuxFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new LinuxButton($label, $height, $width, $theme, 'linux');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new LinuxCheckbox($label, $theme, $enabled, 'linux');
    }
}
