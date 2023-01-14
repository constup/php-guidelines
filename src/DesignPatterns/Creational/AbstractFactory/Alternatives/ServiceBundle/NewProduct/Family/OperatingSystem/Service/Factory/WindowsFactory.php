<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Service\Factory;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\ScrollbarInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Service\FamilyFactoryInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Product\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Product\Checkbox;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Product\Scrollbar;

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

    public function produceScrollbar(
        int $width,
        bool $visible,
        string $theme,
    ): ScrollbarInterface {
        return new Scrollbar($width, $visible, $theme, 'windows');
    }
}
