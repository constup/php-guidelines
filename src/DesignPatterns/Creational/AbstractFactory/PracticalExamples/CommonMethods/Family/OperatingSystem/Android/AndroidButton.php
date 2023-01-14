<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\Family\OperatingSystem\Android;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ButtonInterface;

class AndroidButton implements ButtonInterface
{
    public function __construct(
        public readonly string $label,
        public readonly int $height,
        public readonly int $width,
        public readonly string $theme,
        public readonly string $operatingSystem,
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
        ], JSON_PRETTY_PRINT);

        return 'Render Android Button. ' . PHP_EOL . $result;
    }
}
