<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\ServiceBundle;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewProduct\Family\FamilyResolver;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:service-bundle:new-product',
    description: 'Example of adding a new product to a Service Bundle. An alternative to Abstract Factory.'
)]
class NewProductCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:service-bundle:new-product
     * Run this command in local: php bin/console design-patterns:abstract-factory:service-bundle:new-product
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
         * You will probably want to instantiate Services in another way, either somewhere else inside your code or in
         * the Dependency Injection Container.
         */
        $familyResolver = new FamilyResolver();
        $clientService = new ClientService();

        echo 'Example of adding a new product to a Service Bundle. An alternative to Abstract Factory.' . PHP_EOL;
        echo 'Compared to the original state, a new product called `Scrollbar` has been added, alongside existing products: `Button` and `Checkbox`.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Windows Button, Checkbox and Scrollbar: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('windows')) . PHP_EOL;

        echo 'Rendering Linux Button, Checkbox and Scrollbar: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
