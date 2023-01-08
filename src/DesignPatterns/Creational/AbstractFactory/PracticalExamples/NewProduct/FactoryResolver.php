<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\Family\OperatingSystem\Linux\LinuxFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\Family\OperatingSystem\Windows\WindowsFactory;
use Exception;

class FactoryResolver
{
    public function resolve(
        string $operatingSystem
    ): AbstractFactory {
        switch ($operatingSystem) {
            case 'windows':
                return new WindowsFactory();
            case 'linux':
                return new LinuxFactory();
            default:
                throw new Exception('Invalid operating system.');
        }
    }
}
