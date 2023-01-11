<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Common\LabelProcessingService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Factory\AndroidFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Factory\LinuxFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Factory\WindowsFactory;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Render\AndroidRenderService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Render\LinuxRenderService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Render\WindowsRenderService;
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
                    new LinuxRenderService(),
                    new LabelProcessingService(),
                );
            case 'windows':
                return new FamilyServiceBundle(
                    new WindowsFactory(),
                    new WindowsRenderService(),
                    new LabelProcessingService(),
                );
            case 'android':
                return new FamilyServiceBundle(
                    new AndroidFactory(),
                    new AndroidRenderService(),
                    new LabelProcessingService(),
                );
            default:
                throw new Exception('Invalid operating system');
        }
    }
}
