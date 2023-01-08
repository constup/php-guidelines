<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\Architecture\Arm;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\ButtonInterface;

class ArmButton implements ButtonInterface
{
    public function __construct(
        private readonly string $label,
        private readonly int $height,
        private readonly int $width,
        private readonly string $theme,
        private readonly string $architecture,
    ) {
    }

    public function render(): string
    {
        $result = json_encode([
            'label' => $this->label,
            'height' => $this->height,
            'width' => $this->width,
            'theme' => $this->theme,
            'architecture' => $this->architecture,
        ], JSON_PRETTY_PRINT);

        return 'Render ARM Button. ' . PHP_EOL . $result;
    }
}
