<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\ServiceBundle;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\OriginalExample\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\OriginalExample\Family\FamilyResolver;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:service-bundle:original-example',
    description: 'This is the original state of the objects used to demonstrate various types of modifications and expansions of a Service Bundle - an alternative to the Abstract Factory design pattern.'
)]
class OriginalExampleCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:service-bundle:original-example
     * Run this command in local: php bin/console design-patterns:abstract-factory:service-bundle:original-example
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
        $familyResolver = new FamilyResolver();
        $clientService = new ClientService();

        echo 'This is the original state of the objects used to demonstrate various types of modifications and expansions of a Service Bundle - an alternative to the Abstract Factory design pattern.' . PHP_EOL;
        echo 'The following modifications and expansions are demonstrated in this repository:' . PHP_EOL;
        echo '    • Adding a new property;' . PHP_EOL;
        echo '    • Adding a new family of objects;' . PHP_EOL;
        echo '    • Adding a new family member to the existing family of objects;' . PHP_EOL;
        echo '    • Adding a new product to the family of objects;' . PHP_EOL;
        echo '    • Adding a new subfamily to an existing family of objects;' . PHP_EOL;
        echo 'Examples with CLI commands to run them are available in the repository. Consult the documentation for more information.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('windows')) . PHP_EOL;

        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
