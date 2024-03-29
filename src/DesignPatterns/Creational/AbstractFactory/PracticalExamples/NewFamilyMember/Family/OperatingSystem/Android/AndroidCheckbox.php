<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\Family\OperatingSystem\Android;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\CheckboxInterface;

class AndroidCheckbox implements CheckboxInterface
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
            'operatingSystem' => $this->operatingSystem,
        ], JSON_PRETTY_PRINT);

        return 'Render Android Checkbox. ' . PHP_EOL . $result;
    }
}
