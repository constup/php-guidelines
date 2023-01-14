<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\OperatingSystem\Service\Render;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Service\FamilyRenderServiceInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\OperatingSystem\Product\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\OperatingSystem\Product\Checkbox;

class LinuxRenderService implements FamilyRenderServiceInterface
{
    /**
     * @param Button $button
     *
     * @return string
     */
    public function renderButton(ButtonInterface $button): string
    {
        $result = json_encode([
            'label' => $button->label,
            'height' => $button->height,
            'width' => $button->width,
            'theme' => $button->theme,
            'operatingSystem' => $button->operatingSystem,
            'addedProperty' => $button->addedProperty,
        ], JSON_PRETTY_PRINT);

        return 'Render Linux Button. ' . PHP_EOL . $result;
    }

    /**
     * @param Checkbox $checkbox
     *
     * @return string
     */
    public function renderCheckbox(CheckboxInterface $checkbox): string
    {
        $result = json_encode([
            'label' => $checkbox->label,
            'theme' => $checkbox->theme,
            'enabled' => $checkbox->enabled ? 'true' : 'false',
            'operatingSystem' => $checkbox->operatingSystem,
        ], JSON_PRETTY_PRINT);

        return 'Render Linux Checkbox. ' . PHP_EOL . $result;
    }
}
