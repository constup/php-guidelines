<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\OperatingSystem\Service\Factory\AndroidFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\OperatingSystem\Service\Factory\LinuxFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\OperatingSystem\Service\Factory\WindowsFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\OperatingSystem\Service\Render\AndroidRenderService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\OperatingSystem\Service\Render\LinuxRenderService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\OperatingSystem\Service\Render\WindowsRenderService;
use Exception;

class FamilyResolver
{
    public function resolve(
        string $operatingSystem
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
            case 'android':
                return new FamilyServiceBundle(
                    new AndroidFactory(),
                    new AndroidRenderService(),
                );
            default:
                throw new Exception('Invalid operating system');
        }
    }
}
