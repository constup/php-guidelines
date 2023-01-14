<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\PracticalExamples;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\NewFamilyMember\FactoryResolver;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:practical:new-family-member',
    description: 'Example of adding a new family member in an implementation of an Abstract Factory design pattern.'
)]
class NewFamilyMemberCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:practical:new-family-member
     * Run this command in local: php bin/console design-patterns:abstract-factory:practical:new-family-member
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @throws Exception
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /**
         * You probably want to instantiate Services in another way, either somewhere else inside your code or in
         * the Dependency Injection Container.
         */
        $factoryResolver = new FactoryResolver();
        $clientService = new ClientService();

        echo 'Example of adding a new family member in an implementation of an Abstract Factory design pattern.' . PHP_EOL;
        echo 'Compared to the original state, a new family member called `Android` has been added to the `OperatingSystem` family, alongside Linux and Windows.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('windows')) . PHP_EOL;

        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('linux')) . PHP_EOL;

        echo 'Rendering Android Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('android')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
