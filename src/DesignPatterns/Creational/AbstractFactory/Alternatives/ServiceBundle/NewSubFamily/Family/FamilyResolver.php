<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\OperatingSystem\Service\{
    Factory\Linux\DesktopEnvironment\CrossPlatformFactory as LinuxCrossPlatformFactory,
    Factory\Linux\DesktopEnvironment\KDEFactory,
    Factory\Linux\LinuxFactory,
    Factory\Windows\DesktopEnvironment\CrossPlatformFactory as WindowsCrossPlatformFactory,
    Factory\Windows\WindowsFactory,
    Render\Linux\DesktopEnvironment\CrossPlatformRenderService as LinuxCrossPlatformRenderService,
    Render\Linux\DesktopEnvironment\KDERenderService,
    Render\Linux\LinuxRenderService,
    Render\Windows\DesktopEnvironment\CrossPlatformRenderService as WindowsCrossPlatformRenderService,
    Render\Windows\WindowsRenderService};
use Exception;

class FamilyResolver
{
    public function resolve(
        string $operatingSystem,
        string|null $desktopEnvironment = null,
    ): FamilyServiceBundle {
        switch ($operatingSystem) {
            case 'linux':
                switch ($desktopEnvironment) {
                    case null:
                        return new FamilyServiceBundle(
                            new LinuxFactory(),
                            new LinuxRenderService()
                        );
                    case 'kde':
                        return new FamilyServiceBundle(
                            new KDEFactory(),
                            new KDERenderService(),
                        );
                    case 'crossPlatform':
                        return new FamilyServiceBundle(
                            new LinuxCrossPlatformFactory(),
                            new LinuxCrossPlatformRenderService(),
                        );
                    default:
                        throw new Exception('Invalid desktop environment.');
                }
                // no break
            case 'windows':
                switch ($desktopEnvironment) {
                    case null:
                        return new FamilyServiceBundle(
                            new WindowsFactory(),
                            new WindowsRenderService(),
                        );
                    case 'crossPlatform':
                        return new FamilyServiceBundle(
                            new WindowsCrossPlatformFactory(),
                            new WindowsCrossPlatformRenderService()
                        );
                    default:
                        throw new Exception('Invalid desktop environment.');
                }
                // no break
            default:
                throw new Exception('Invalid operating system');
        }
    }
}
