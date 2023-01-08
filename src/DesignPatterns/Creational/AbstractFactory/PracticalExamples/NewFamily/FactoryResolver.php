<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\Architecture\Arm\ArmFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\Architecture\X86\X86Factory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\OperatingSystem\Linux\LinuxFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamily\Family\OperatingSystem\Windows\WindowsFactory;
use Exception;

class FactoryResolver
{
    public function resolve(
        ?string $operatingSystem,
        ?string $architecture,
    ): AbstractFactory {
        switch ($operatingSystem) {
            case 'windows':
                return new WindowsFactory();
            case 'linux':
                return new LinuxFactory();
            case null:
                switch ($architecture) {
                    case 'x86':
                        return new X86Factory();
                    case 'arm':
                        return new ArmFactory();
                    default:
                        throw new Exception('Invalid operating system or architecture.');
                }
                // no break
            default:
                throw new Exception('Invalid operating system.');
        }
    }
}
