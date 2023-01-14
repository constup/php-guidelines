<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\Family\OperatingSystem\Android;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ScrollbarInterface;

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

    public function produceScrollbar(
        bool $visible,
        int $width,
        string $theme,
    ): ScrollbarInterface {
        return new AndroidScrollbar($visible, $width, $theme, 'android');
    }
}
