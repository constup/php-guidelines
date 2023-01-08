<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\Architecture\Arm;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\CheckboxInterface;

class ArmCheckbox implements CheckboxInterface
{
    public function __construct(
        private readonly string $label,
        private readonly string $theme,
        private readonly bool $enabled,
        private readonly string $architecture,
    ) {
    }

    public function render(): string
    {
        $result = json_encode([
            'label' => $this->label,
            'theme' => $this->theme,
            'enabled' => $this->enabled ? 'true' : 'false',
            'architecture' => $this->architecture,
        ], JSON_PRETTY_PRINT);

        return 'Render ARM Checkbox. ' . PHP_EOL . $result;
    }
}
