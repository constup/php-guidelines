<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\ServiceBundle;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\AddProperty\Family\FamilyResolver;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:service-bundle:add-property',
    description: 'Example of adding a property to a Product in a Service Bundle. An alternative to Abstract Factory.'
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
        /**
         * You probably want to instantiate Services in another way, either somewhere else inside your code or in
         * the Dependency Injection Container.
         */
        $familyResolver = new FamilyResolver();
        $clientService = new ClientService();

        echo 'Example of adding a property to a Product in a Service Bundle. An alternative to Abstract Factory.' . PHP_EOL;
        echo 'Compared to the original state, Buttons have a new property called `addedProperty`.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux'));

        echo PHP_EOL . 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('windows'));

        return Command::SUCCESS;
    }
}
