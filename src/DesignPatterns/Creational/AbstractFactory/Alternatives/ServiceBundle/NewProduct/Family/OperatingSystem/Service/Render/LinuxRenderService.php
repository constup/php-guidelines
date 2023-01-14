<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Service\Render;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Product\ScrollbarInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\Interfaces\Service\FamilyRenderServiceInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Product\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Product\Checkbox;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\OperatingSystem\Product\Scrollbar;

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

    /**
     * @param Scrollbar $scrollbar
     *
     * @return string
     */
    public function renderScrollbar(ScrollbarInterface $scrollbar): string
    {
        $result = json_encode([
            'theme' => $scrollbar->theme,
            'width' => $scrollbar->width,
            'visible' => $scrollbar->visible ? 'true' : 'false',
            'operatingSystem' => $scrollbar->operatingSystem,
        ], JSON_PRETTY_PRINT);

        return 'Render Linux Scrollbar. ' . PHP_EOL . $result;
    }
}
