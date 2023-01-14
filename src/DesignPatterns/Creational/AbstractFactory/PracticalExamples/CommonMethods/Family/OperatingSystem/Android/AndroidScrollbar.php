<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\Family\OperatingSystem\Android;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ScrollbarInterface;

class AndroidScrollbar implements ScrollbarInterface
{
    public function __construct(
        public readonly bool $visible,
        public readonly int $width,
        public readonly string $theme,
        public readonly string $operatingSystem,
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
