<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\OperatingSystem\Linux;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\CheckboxInterface;

class LinuxCheckbox implements CheckboxInterface
{
    public function __construct(
        private readonly string $label,
        private readonly string $theme,
        private readonly bool $enabled,
        private readonly string $operatingSystem,
    ) {
    }

    public function render(): string
    {
        $result = json_encode([
            'label' => $this->label,
            'theme' => $this->theme,
            'enabled' => $this->enabled ? 'true' : 'false',
            'operatingSystem' => $this->operatingSystem
        ], JSON_PRETTY_PRINT);

        return 'Render Linux Checkbox. ' . PHP_EOL . $result;
    }
}
