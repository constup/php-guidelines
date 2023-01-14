<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\PracticalExamples;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\OriginalExample\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\OriginalExample\FactoryResolver;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:practical:original-example',
    description: 'This is the original state of the objects used to demonstrate various types of modifications and expansions of the Abstract Factory design pattern.'
)]
class OriginalExampleCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:practical:original-example
     * Run this command in local: php bin/console design-patterns:abstract-factory:practical:original-example
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

        echo 'This is the original state of the objects used to demonstrate various types of modifications and expansions of the Abstract Factory design pattern.' . PHP_EOL;
        echo 'The following modifications and expansions are demonstrated in this repository:' . PHP_EOL;
        echo '    • Adding a new property;' . PHP_EOL;
        echo '    • Adding a new family of objects;' . PHP_EOL;
        echo '    • Adding a new family member to the existing family of objects;' . PHP_EOL;
        echo '    • Adding a new product to the family of objects;' . PHP_EOL;
        echo '    • Adding a new subfamily to an existing family of objects;' . PHP_EOL;
        echo 'Examples with CLI commands to run them are available in the repository. Consult the documentation for more information.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('windows')) . PHP_EOL;

        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($factoryResolver->resolve('linux')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
