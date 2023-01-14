<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\Architecture\Arm;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\CheckboxInterface;

class ArmFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
    ): ButtonInterface {
        return new ArmButton($label, $height, $width, $theme, 'arm');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled,
    ): CheckboxInterface {
        return new ArmCheckbox($label, $theme, $enabled, 'arm');
    }
}
