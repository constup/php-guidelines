<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Service;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Product\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Product\ScrollbarInterface;

interface FamilyRenderServiceInterface
{
    public function renderButton(ButtonInterface $button): string;

    public function renderCheckbox(CheckboxInterface $checkbox): string;

    public function renderScrollbar(ScrollbarInterface $scrollbar): string;

}
