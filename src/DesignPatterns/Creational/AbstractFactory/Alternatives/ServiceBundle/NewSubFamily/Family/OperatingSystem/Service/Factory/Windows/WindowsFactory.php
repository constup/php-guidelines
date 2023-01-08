<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Service\Factory\Windows;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\Interfaces\Service\FamilyFactoryInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Product\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Product\Checkbox;

class WindowsFactory implements FamilyFactoryInterface
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new Button($label, $height, $width, $theme, 'windows');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new Checkbox($label, $theme, $enabled, 'windows');
    }
}
