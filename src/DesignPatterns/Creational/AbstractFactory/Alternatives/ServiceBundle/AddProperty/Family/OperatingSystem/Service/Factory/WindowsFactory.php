<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\OperatingSystem\Service\Factory;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Service\FamilyFactoryInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\OperatingSystem\Product\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\OperatingSystem\Product\Checkbox;

class WindowsFactory implements FamilyFactoryInterface
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
        string $addedProperty,
    ): ButtonInterface {
        return new Button($label, $height, $width, $theme, 'windows', $addedProperty);
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new Checkbox($label, $theme, $enabled, 'windows');
    }
}
