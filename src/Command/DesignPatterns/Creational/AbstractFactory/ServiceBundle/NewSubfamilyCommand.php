<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\ServiceBundle;

use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\Alternatives\ServiceBundle\NewSubFamily\Family\FamilyResolver;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:service-bundle:new-subfamily',
    description: 'Example of adding new sub families to the existing families in a Service Bundle. An alternative to Abstract Factory.'
)]
class NewSubfamilyCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:service-bundle:new-subfamily
     * Run this command in local: php bin/console design-patterns:abstract-factory:service-bundle:new-subfamily
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
        $familyResolver = new FamilyResolver();
        $clientService = new ClientService();

        echo 'Example of adding new sub families to the existing families in a Service Bundle. An alternative to Abstract Factory.' . PHP_EOL;
        echo 'Compared to the original state, the Operating System family now has a sub family called `desktopEnvironment`.' . PHP_EOL;
        echo '`Linux` family got two subfamilies: `KDE` and `CrossPlatform`, while `Windows` family got one subfamily: `CrossPlatform`.' . PHP_EOL . PHP_EOL;

        echo 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('windows')) . PHP_EOL;
        echo 'Rendering Windows CrossPlatform Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('windows', 'crossPlatform')) . PHP_EOL;

        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux')) . PHP_EOL;
        echo 'Rendering Linux KDE Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux', 'kde')) . PHP_EOL;
        echo 'Rendering Linux CrossPlatform Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux', 'crossPlatform')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
