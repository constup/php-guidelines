<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Service\Factory;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Prodcut\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Prodcut\Checkbox;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Interfaces\Service\FamilyFactoryInterface;

class ArmFactory implements FamilyFactoryInterface
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme
    ): ButtonInterface {
        return new Button($label, $height, $width, $theme, 'arm');
    }

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled
    ): CheckboxInterface {
        return new Checkbox($label, $theme, $enabled, 'arm');
    }
}
