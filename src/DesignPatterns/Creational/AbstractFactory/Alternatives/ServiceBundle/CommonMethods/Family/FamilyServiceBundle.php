<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Common\LabelProcessingService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Service\FamilyFactoryInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Service\FamilyRenderServiceInterface;

class FamilyServiceBundle
{
    private FamilyFactoryInterface $familyFactory;
    private FamilyRenderServiceInterface $familyRenderService;
    private LabelProcessingService $labelProcessingService;

    /**
     * @param FamilyFactoryInterface       $familyFactory
     * @param FamilyRenderServiceInterface $familyRenderService
     * @param LabelProcessingService       $labelProcessingService
     */
    public function __construct(FamilyFactoryInterface $familyFactory, FamilyRenderServiceInterface $familyRenderService, LabelProcessingService $labelProcessingService)
    {
        $this->familyFactory = $familyFactory;
        $this->familyRenderService = $familyRenderService;
        $this->labelProcessingService = $labelProcessingService;
    }

    /**
     * @return FamilyFactoryInterface
     */
    public function getFamilyFactory(): FamilyFactoryInterface
    {
        return $this->familyFactory;
    }

    /**
     * @return FamilyRenderServiceInterface
     */
    public function getFamilyRenderService(): FamilyRenderServiceInterface
    {
        return $this->familyRenderService;
    }

    /**
     * @return \App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Common\LabelProcessingService
     */
    public function getLabelProcessingService(): LabelProcessingService
    {
        return $this->labelProcessingService;
    }
}
