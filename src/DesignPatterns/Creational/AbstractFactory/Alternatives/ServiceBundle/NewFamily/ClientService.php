<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\FamilyServiceBundle;

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

        $buttonRenderResult = $familyBundle->getFamilyRenderService()->renderButton($button);
        $checkboxRenderResult = $familyBundle->getFamilyRenderService()->renderCheckbox($checkbox);

        $result = 'Button->render() result: ' . $buttonRenderResult . PHP_EOL;
        $result .= 'Checkbox->render() result: ' . $checkboxRenderResult . PHP_EOL;

        return $result;
    }
}
