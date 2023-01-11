<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\PracticalExamples;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewProduct\FactoryResolver;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:practical:new-product',
    description: 'Example of adding a new product in an implementation of an Abstract Factory design pattern.'
)]
class NewProductCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:practical:new-product
     * Run this command in local: php bin/console design-patterns:abstract-factory:practical:new-product
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @throws \Exception
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /**
         * You probably want to instantiate Services in another way, either somewhere else inside your code or in
         * the Dependency Injection Container.
         */
        $factoryResolver = new FactoryResolver();
        $clientService = new ClientService();

        echo 'Example of adding a new product in an implementation of an Abstract Factory design pattern.' . PHP_EOL;
        echo 'Compared to the original state, a new product called `Scrollbar` has been added, alongside existing products: `Button` and `Checkbox`.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Windows Button, Checkbox and Scrollbar: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('windows')) . PHP_EOL;

        echo 'Rendering Linux Button, Checkbox and Scrollbar: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('linux')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
