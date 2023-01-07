<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\ServiceBundle;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\AddProperty\FactoryResolver;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:service-bundle:add-property',
    description: 'Example of adding a property to a Product in a  Service Bundle. An alternative to Abstract Factory.'
)]
class AddPropertyCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:service-bundle:add-property
     * Run this command in local: php bin/console design-patterns:abstract-factory:service-bundle:add-property
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @throws Exception
     *
     * @return int
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $factoryResolver = new FactoryResolver();
        $clientService = new ClientService();

        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('linux'));
        echo PHP_EOL . 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('windows'));

        return Command::SUCCESS;
    }
}
