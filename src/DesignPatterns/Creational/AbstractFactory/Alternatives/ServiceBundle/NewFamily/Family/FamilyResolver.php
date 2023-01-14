<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Service\Factory\ArmFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Service\Factory\X86Factory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Service\Render\ArmRenderService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\Architecture\Service\Render\X86RenderService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\OperatingSystem\Service\Factory\LinuxFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\OperatingSystem\Service\Factory\WindowsFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\OperatingSystem\Service\Render\LinuxRenderService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\OperatingSystem\Service\Render\WindowsRenderService;
use Exception;

class FamilyResolver
{
    /**
     * @throws Exception
     */
    public function resolve(
        ?string $operatingSystem,
        ?string $architecture,
    ): FamilyServiceBundle {
        switch ($operatingSystem) {
            case 'linux':
                return new FamilyServiceBundle(
                    new LinuxFactory(),
                    new LinuxRenderService()
                );
            case 'windows':
                return new FamilyServiceBundle(
                    new WindowsFactory(),
                    new WindowsRenderService(),
                );
            case null:
                switch ($architecture) {
                    case 'x86':
                        return new FamilyServiceBundle(
                            new X86Factory(),
                            new X86RenderService(),
                        );
                    case 'arm':
                        return new FamilyServiceBundle(
                            new ArmFactory(),
                            new ArmRenderService(),
                        );
                    default:
                        throw new Exception('Invalid operating system or architecture.');
                }
                // no break
            default:
                throw new Exception('Invalid operating system');
        }
    }
}
