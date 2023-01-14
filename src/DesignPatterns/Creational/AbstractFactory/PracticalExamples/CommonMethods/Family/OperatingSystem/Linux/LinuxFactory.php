<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\Family\OperatingSystem\Linux;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ScrollbarInterface;

class LinuxFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
    ): ButtonInterface {
        return new LinuxButton($label, $height, $width, $theme, 'linux');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled,
    ): CheckboxInterface {
        return new LinuxCheckbox($label, $theme, $enabled, 'linux');
    }

    public function produceScrollbar(
        bool $visible,
        int $width,
        string $theme,
    ): ScrollbarInterface {
        return new LinuxScrollbar($visible, $width, $theme, 'linux');
    }
}
