<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty;

interface AbstractFactory
{
    public function produceButton(
        string $label,
        int $height,
        int $width,
        string $theme,
        string $addedProperty,
    ): ButtonInterface;

    public function produceCheckbox(
        string $label,
        string $theme,
        bool $enabled,
    ): CheckboxInterface;
}
