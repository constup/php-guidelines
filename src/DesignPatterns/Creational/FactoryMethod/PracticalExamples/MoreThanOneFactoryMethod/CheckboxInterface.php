<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\MoreThanOneFactoryMethod;

/**
 * Product
 */
interface CheckboxInterface
{
    public function __construct(
        string $label,
        string $theme,
        bool $enabled
    );

    public function render(): string;
}
