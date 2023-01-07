<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\Family\OperatingSystem\Linux;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\ButtonInterface;

class LinuxButton implements ButtonInterface
{
    public function __construct(
        private readonly string $label,
        private readonly int $height,
        private readonly int $width,
        private readonly string $theme,
        private readonly string $operatingSystem,
        private readonly string $addedProperty,
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
            'addedProperty' => $this->addedProperty,
        ], JSON_PRETTY_PRINT);

        return 'Render Linux Button. ' . PHP_EOL . $result;
    }
}
