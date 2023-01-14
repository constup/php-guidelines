<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty;

class ClientService
{
    public function renderUI(
        AbstractFactory $factory,
    ): string {
        $button = $factory->produceButton('sample button label', 10, 30, 'default_light_theme', 'added property value');
        $checkbox = $factory->produceCheckbox('sample checkbox label', 'default_light_theme', true);

        $result = 'Button->render() result: ' . $button->render() . PHP_EOL;
        $result .= 'Checkbox->render() result: ' . $checkbox->render() . PHP_EOL;

        return $result;
    }
}
