<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\Family\OperatingSystem\Windows;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\ScrollbarInterface;

class WindowsScrollbar implements ScrollbarInterface
{
    public function __construct(
        private readonly bool $visible,
        private readonly int $width,
        private readonly string $theme,
        private readonly string $operatingSystem,
    ) {
    }

    public function render(): string
    {
        $result = json_encode([
            'visible' => $this->visible ? 'true' : 'false',
            'width' => $this->width,
            'theme' => $this->theme,
            'operatingSystem' => $this->operatingSystem,
        ], JSON_PRETTY_PRINT);

        return 'Render Windows Scrollbar: ' . PHP_EOL . $result;
    }
}
