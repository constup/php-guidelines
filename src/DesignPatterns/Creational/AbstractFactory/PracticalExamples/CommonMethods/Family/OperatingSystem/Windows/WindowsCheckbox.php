<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\Family\OperatingSystem\Windows;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\CheckboxInterface;

class WindowsCheckbox implements CheckboxInterface
{
    public function __construct(
        public readonly string $label,
        public readonly string $theme,
        public readonly bool $enabled,
        public readonly string $operatingSystem,
    ) {
    }

    public function render(): string
    {
        $result = json_encode([
            'label' => $this->label,
            'theme' => $this->theme,
            'enabled' => $this->enabled ? 'true' : 'false',
            'operatingSystem' => $this->operatingSystem,
        ], JSON_PRETTY_PRINT);

        return 'Render Windows Checkbox. ' . PHP_EOL . $result;
    }
}
