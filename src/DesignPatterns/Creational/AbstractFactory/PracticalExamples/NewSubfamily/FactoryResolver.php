<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Linux\DesktopEnvironment\CrossPlatform\CrossPlatformFactory as LinuxCrossPlatformFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Linux\DesktopEnvironment\KDE\KDEFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Linux\LinuxFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Windows\DesktopEnvironment\CrossPlatform\CrossPlatformFactory as WindowsCrossPlatformFactory;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewSubfamily\Family\OperatingSystem\Windows\WindowsFactory;
use Exception;

class FactoryResolver
{
    /**
     * @param string $operatingSystem
     * @param string $desktopEnvironment
     *
     * @throws Exception
     *
     * @return AbstractFactory
     */
    public function resolve(
        string $operatingSystem,
        string|null $desktopEnvironment = null
    ): AbstractFactory {
        switch ($operatingSystem) {
            case 'windows':
                switch ($desktopEnvironment) {
                    case null:
                        return new WindowsFactory();
                    case 'crossPlatform':
                        return new WindowsCrossPlatformFactory();
                    default:
                        throw new Exception('Invalid desktop environment.');
                }
            case 'linux':
                switch ($desktopEnvironment) {
                    case null:
                        return new LinuxFactory();
                    case 'kde':
                        return new KDEFactory();
                    case 'crossPlatform':
                        return new LinuxCrossPlatformFactory();
                    default:
                        throw new Exception('Invalid desktop environment.');
                }
        }

        throw new Exception('Invalid operating system.');
    }
}
