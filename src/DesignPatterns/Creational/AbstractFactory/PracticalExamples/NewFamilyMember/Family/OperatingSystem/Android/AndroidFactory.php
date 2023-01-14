<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\Family\OperatingSystem\Android;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\CheckboxInterface;

class AndroidFactory implements AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new AndroidButton($label, $height, $width, $theme, 'android');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled,
    ): CheckboxInterface {
        return new AndroidCheckbox($label, $theme, $enabled, 'android');
    }
}
