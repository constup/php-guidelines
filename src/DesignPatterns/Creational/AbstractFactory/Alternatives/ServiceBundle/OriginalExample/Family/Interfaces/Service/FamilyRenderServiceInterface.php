<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\OriginalExample\Family\Interfaces\Service;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\OriginalExample\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\OriginalExample\Family\Interfaces\Product\CheckboxInterface;

interface FamilyRenderServiceInterface
{
    public function renderButton(ButtonInterface $button): string;

    public function renderCheckbox(CheckboxInterface $checkbox): string;
}
