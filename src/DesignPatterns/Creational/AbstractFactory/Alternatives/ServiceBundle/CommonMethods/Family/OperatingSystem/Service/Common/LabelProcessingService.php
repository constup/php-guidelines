<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\OperatingSystem\Service\Common;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Product\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\CommonMethods\Family\Interfaces\Product\CheckboxInterface;

class LabelProcessingService
{
    public function processLabel(
        ButtonInterface | CheckboxInterface $product
    ): string {
        $result = 'This method does some processing on labels of Products of all families and subfamilies.' . PHP_EOL;
        $result .= $product->label . ' processLabel suffix.';

        return $result;
    }

    public function processOnlyLinuxLabel(
        ButtonInterface | CheckboxInterface $product
    ): string|null {
        if ($product->operatingSystem === 'linux') {
            $result = 'This method does some processing on labels of Products, but only if the Product belongs to Linux family.' . PHP_EOL;
            $result .= $product->label . ' processOnlyLinuxLabel suffix.';

            return $result;
        }

        return null;
    }

    public function processOnlyLinuxWindowsLabel(
        ButtonInterface | CheckboxInterface $product
    ): string|null {
        if ($product->operatingSystem === 'linux' || $product->operatingSystem === 'windows') {
            $result = 'This method does some processing on labels of Products, but only if the Product belongs to Linux or Windows family. It returns `null` for Android Products.' . PHP_EOL;
            $result .= $product->label . ' processOnlyLinuxWindowsLabel suffix.';

            return $result;
        }

        return null;
    }
}
