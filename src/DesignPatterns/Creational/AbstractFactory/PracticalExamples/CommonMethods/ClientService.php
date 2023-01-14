<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\CommonServices\LabelProcessingService;

class ClientService
{
    public function __construct(
        public readonly LabelProcessingService $labelProcessingService,
    ) {}

    public function renderUI(
        AbstractFactory $factory,
    ): string {
        $button = $factory->produceButton('sample button label', 10, 30, 'default_light_theme');
        $checkbox = $factory->produceCheckbox('sample checkbox label', 'default_light_theme', true);
        $scrollbar = $factory->produceScrollbar(true, 10, 'default_light_theme');

        $result = 'Button->render() result: ' . $button->render() . PHP_EOL;
        $result .= 'Checkbox->render() result: ' . $checkbox->render() . PHP_EOL;
        $result .= 'Scrollbar->render() result: ' . $scrollbar->render() . PHP_EOL;
        $result .= 'Results of common processing methods for Buttons:' . PHP_EOL;
        $result .= '-----' . PHP_EOL;

        $processLabelResult = $this->labelProcessingService->processLabel($button);
        $processOnlyLinuxLabelResult = $this->labelProcessingService->processOnlyLinuxLabel($button);
        $processOnlyLinuxWindowsLabelResult = $this->labelProcessingService->processOnlyLinuxWindowsLabel($button);

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
        $processLabelResult = $this->labelProcessingService->processLabel($checkbox);
        $processOnlyLinuxLabelResult = $this->labelProcessingService->processOnlyLinuxLabel($checkbox);
        $processOnlyLinuxWindowsLabelResult = $this->labelProcessingService->processOnlyLinuxWindowsLabel($checkbox);

        $result .= $processLabelResult
            ? $processLabelResult . PHP_EOL . PHP_EOL
            : '';
        $result .= $processOnlyLinuxLabelResult
            ? $processOnlyLinuxLabelResult . PHP_EOL . PHP_EOL
            : '';
        $result .= $processOnlyLinuxWindowsLabelResult
            ? $processOnlyLinuxWindowsLabelResult . PHP_EOL . PHP_EOL
            : '';

        return $result;
    }
}
