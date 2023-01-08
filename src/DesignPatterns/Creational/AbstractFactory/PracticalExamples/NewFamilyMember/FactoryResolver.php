<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\Family\OperatingSystem\Android\AndroidFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\Family\OperatingSystem\Linux\LinuxFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\Family\OperatingSystem\Windows\WindowsFactory;
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
            case 'android':
                return new AndroidFactory();
            default:
                throw new Exception('Invalid operating system.');
        }
    }
}
