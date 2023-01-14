<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Windows\DesktopEnvironment\CrossPlatform;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\ButtonInterface;

class CrossPlatformButton implements ButtonInterface
{
    public function __construct(
        private readonly string $label,
        private readonly int $height,
        private readonly int $width,
        private readonly string $theme,
        private readonly string $operatingSystem,
        private readonly ?string $desktopEnvironment,
    ) {
    }

    public function render(): string
    {
        $result = json_encode([
            'label' => $this->label,
            'height' => $this->height,
            'width' => $this->width,
            'theme' => $this->theme,
            'operatingSystem' => $this->operatingSystem,
            'desktopEnvironment' => $this->desktopEnvironment,
        ], JSON_PRETTY_PRINT);

        return 'Render Windows CrossPlatform Button. ' . PHP_EOL . $result;
    }
}
