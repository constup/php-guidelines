<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\FamilyServiceBundle;

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
        $result .= 'Scrollbar->render() result: ' . $scrollbarRenderResult . PHP_EOL;

        $result .= 'Results of common processing methods for Buttons:' . PHP_EOL;
        $result .= '-----' . PHP_EOL;
        $processLabelResult = $familyBundle->getLabelProcessingService()->processLabel($button);
        $processOnlyLinuxLabelResult = $familyBundle->getLabelProcessingService()->processOnlyLinuxLabel($button);
        $processOnlyLinuxWindowsLabelResult = $familyBundle->getLabelProcessingService()->processOnlyLinuxWindowsLabel($button);

        $result .= $processLabelResult
            ? $processLabelResult . PHP_EOL . PHP_EOL
            : '';
        $result .= $processOnlyLinuxLabelResult
            ? $processOnlyLinuxLabelResult . PHP_EOL . PHP_EOL
            : '';
        $result .= $processOnlyLinuxWindowsLabelResult
            ? $processOnlyLinuxWindowsLabelResult . PHP_EOL . PHP_EOL
            : '';

        $result .= 'Results of common processing methods for Checkboxes:' . PHP_EOL;
        $result .= '-----' . PHP_EOL;
        $processLabelResult = $familyBundle->getLabelProcessingService()->processLabel($checkbox);
        $processOnlyLinuxLabelResult = $familyBundle->getLabelProcessingService()->processOnlyLinuxLabel($checkbox);
        $processOnlyLinuxWindowsLabelResult = $familyBundle->getLabelProcessingService()->processOnlyLinuxWindowsLabel($checkbox);

        $result .= $processLabelResult
            ? $processLabelResult . PHP_EOL . PHP_EOL
            : '';
        $result .= $processOnlyLinuxLabelResult
            ? $processOnlyLinuxLabelResult . PHP_EOL . PHP_EOL
            : '';
        $result .= $processOnlyLinuxWindowsLabelResult
            ? $processOnlyLinuxWindowsLabelResult . PHP_EOL . PHP_EOL
            : '';

        /**
         * Commented code below is not valid, because Label Processing Service methods do not process Scrollbars.
         * This is, however, true only for this particular example implementation. You are, of course, free to use more
         * detailed type and error handling.
         */
//        $result .= 'Results of common processing methods for Scrollbars:' . PHP_EOL;
//        $result .= '-----' . PHP_EOL;
//        $processLabelResult = $familyBundle->getLabelProcessingService()->processLabel($scrollbar);
//        $processOnlyLinuxLabelResult = $familyBundle->getLabelProcessingService()->processOnlyLinuxLabel($scrollbar);
//        $processOnlyLinuxWindowsLabelResult = $familyBundle->getLabelProcessingService()->processOnlyLinuxWindowsLabel($scrollbar);
//
//        $result .= $processLabelResult
//            ? $processLabelResult . PHP_EOL . PHP_EOL
//            : '';
//        $result .= $processOnlyLinuxLabelResult
//            ? $processOnlyLinuxLabelResult . PHP_EOL . PHP_EOL
//            : '';
//        $result .= $processOnlyLinuxWindowsLabelResult
//            ? $processOnlyLinuxWindowsLabelResult . PHP_EOL . PHP_EOL
//            : '';

        return $result;
    }
}
