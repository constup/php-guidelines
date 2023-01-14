<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Service;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\Interfaces\Product\CheckboxInterface;

interface FamilyRenderServiceInterface
{
    public function renderButton(ButtonInterface $button): string;

    public function renderCheckbox(CheckboxInterface $checkbox): string;
}
