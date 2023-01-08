<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Service\Render\Linux\DesktopEnvironment;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\Interfaces\Service\FamilyRenderServiceInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Product\DesktopEnvironment\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Product\DesktopEnvironment\Checkbox;

class KDERenderService implements FamilyRenderServiceInterface
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
            'desktopEnvironment' => $button->desktopEnvironment,
        ], JSON_PRETTY_PRINT);

        return 'Render KDE Linux Button. ' . PHP_EOL . $result;
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
            'desktopEnvironment' => $checkbox->desktopEnvironment,
        ], JSON_PRETTY_PRINT);

        return 'Render KDE Linux Checkbox. ' . PHP_EOL . $result;
    }
}
