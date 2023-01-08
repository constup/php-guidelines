<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\ServiceBundle;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewFamily\Family\FamilyResolver;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:service-bundle:new-family',
    description: 'Example of adding a new family of Products to a Service Bundle. An alternative to Abstract Factory.'
)]
class NewFamilyCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:service-bundle:new-family
     * Run this command in local: php bin/console design-patterns:abstract-factory:service-bundle:new-family
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @throws Exception
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /**
         * You will probably want to instantiate Services in another way, either somewhere else inside your code or in
         * the Dependency Injection Container.
         */
        $familyResolver = new FamilyResolver();
        $clientService = new ClientService();

        echo 'Example of adding a new family of Products to a Service Bundle. An alternative to Abstract Factory.' . PHP_EOL;
        echo 'Compared to the original state, a new family based on Architecture is added. The new family has two members: ARM and X86.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('windows', null)) . PHP_EOL;

        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux', null)) . PHP_EOL;

        echo 'Rendering ARM Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve(null, 'arm')) . PHP_EOL;

        echo 'Rendering X86 Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve(null, 'x86')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
