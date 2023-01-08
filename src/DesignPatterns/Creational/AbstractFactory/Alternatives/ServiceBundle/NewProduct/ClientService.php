<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\FamilyServiceBundle;

class ClientService
{
    public function renderUI(
        FamilyServiceBundle $familyBundle
    ): string {
        $button = $familyBundle
            ->getFamilyFactory()
            ->produceButton('sample button label', 10, 30, 'default_light_theme');
        $checkbox = $familyBundle
            ->getFamilyFactory()
            ->produceCheckbox('sample checkbox label', 'default_light_theme', true);
        $scrollbar = $familyBundle
            ->getFamilyFactory()
            ->produceScrollbar(10, true, 'default_light_theme');

        $buttonRenderResult = $familyBundle->getFamilyRenderService()->renderButton($button);
        $checkboxRenderResult = $familyBundle->getFamilyRenderService()->renderCheckbox($checkbox);
        $scrollbarRenderResult = $familyBundle->getFamilyRenderService()->renderScrollbar($scrollbar);

        $result = 'Button->render() result: ' . $buttonRenderResult . PHP_EOL;
        $result .= 'Checkbox->render() result: ' . $checkboxRenderResult . PHP_EOL;
        $result .= 'Scrollbar->render() resultL ' . $scrollbarRenderResult . PHP_EOL;

        return $result;
    }
}
