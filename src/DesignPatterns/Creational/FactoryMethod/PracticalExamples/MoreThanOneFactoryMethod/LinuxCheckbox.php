<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\MoreThanOneFactoryMethod;

/**
 * Concrete Product
 */
class LinuxCheckbox implements CheckboxInterface
{
    public function __construct(
        private readonly string $label,
        private readonly string $theme,
        private readonly bool $enabled
    ) {
    }

    public function render(): string
    {
        $enabled = $this->enabled ? 'true' : 'false';

        return "Render LinuxCheckbox. Label: $this->label. Theme: $this->theme. Enabled: $enabled";
    }
}
