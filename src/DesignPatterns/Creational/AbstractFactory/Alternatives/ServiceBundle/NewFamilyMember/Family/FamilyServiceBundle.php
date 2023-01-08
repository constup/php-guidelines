<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\Interfaces\Service\FamilyFactoryInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamilyMember\Family\Interfaces\Service\FamilyRenderServiceInterface;

class FamilyServiceBundle
{
    private FamilyFactoryInterface $familyFactory;
    private FamilyRenderServiceInterface $familyRenderService;

    /**
     * @param FamilyFactoryInterface       $familyFactory
     * @param FamilyRenderServiceInterface $familyRenderService
     */
    public function __construct(FamilyFactoryInterface $familyFactory, FamilyRenderServiceInterface $familyRenderService)
    {
        $this->familyFactory = $familyFactory;
        $this->familyRenderService = $familyRenderService;
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
}
