<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\Architecture\X86;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\CheckboxInterface;

class X86Checkbox implements CheckboxInterface
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
            'architecture' => $this->architecture
        ], JSON_PRETTY_PRINT);

        return 'Render X86 Checkbox. ' . PHP_EOL . $result;
    }
}
