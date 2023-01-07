<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\Family\OperatingSystem\Linux;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\CheckboxInterface;

class LinuxFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
        string $addedProperty,
    ): ButtonInterface {
        return new LinuxButton($label, $height, $width, $theme, 'linux', $addedProperty);
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled,
    ): CheckboxInterface {
        return new LinuxCheckbox($label, $theme, $enabled, 'linux');
    }
}
