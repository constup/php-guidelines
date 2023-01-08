<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Service\Render;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Prodcut\Button;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Prodcut\Checkbox;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Interfaces\Service\FamilyRenderServiceInterface;

class X86RenderService implements FamilyRenderServiceInterface
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
            'architecture' => $button->architecture,
        ], JSON_PRETTY_PRINT);

        return 'Render X86 Button. ' . PHP_EOL . $result;
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
            'architecture' => $checkbox->architecture,
        ], JSON_PRETTY_PRINT);

        return 'Render X86 Checkbox. ' . PHP_EOL . $result;
    }
}
