<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct;

interface ScrollbarInterface
{
    public function render(): string;
}
