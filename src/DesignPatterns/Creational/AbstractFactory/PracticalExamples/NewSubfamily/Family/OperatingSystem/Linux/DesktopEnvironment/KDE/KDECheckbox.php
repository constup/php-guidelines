<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Linux\DesktopEnvironment\KDE;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\CheckboxInterface;

class KDECheckbox implements CheckboxInterface
{
    public function __construct(
        private readonly string $label,
        private readonly string $theme,
        private readonly bool $enabled,
        private readonly string $operatingSystem,
        private readonly ?string $desktopEnvironment,
    ) {
    }

    public function render(): string
    {
        $result = json_encode([
            'label' => $this->label,
            'theme' => $this->theme,
            'enabled' => $this->enabled ? 'true' : 'false',
            'operatingSystem' => $this->operatingSystem,
            'desktopEnvironment' => $this->desktopEnvironment,
        ], JSON_PRETTY_PRINT);

        return 'Render Linux KDE Checkbox. ' . PHP_EOL . $result;
    }
}
