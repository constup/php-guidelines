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

/**
 * NOTE: An example listed here instantiates a new instance of LabelProcessingService for each of the family members.
 * This is just an example implementation to demonstrate that you can use different services for each of the family
 * members. You can replace LabelProcessingService with MyLabelProcessingService, which implements the same interface,
 * and use different business logic for a specific family member. There are other ways to organize service loading, but
 * that is not the topic here.
 */
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
