<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\AbstractFactory\PracticalExamples;

use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\ClientService;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\Common\LabelProcessingService;
use App\DesignPatterns\Creational\AbstractFactory\PracticalExamples\CommonMethods\FactoryResolver;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:abstract-factory:practical:common-methods',
    description: 'Example of using services and service methods which are common only to specific products of specified families. Abstract Factory implementation.'
)]
class CommonMethodsCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:abstract-factory:practical:common-methods
     * Run this command in local: php bin/console design-patterns:abstract-factory:practical:common-methods
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
        $familyResolver = new FactoryResolver();
        $clientService = new ClientService(new LabelProcessingService());

        echo 'Example of using services and service methods which are common only to specific products of specified families. Abstract Factory implementation.' . PHP_EOL . PHP_EOL;

        echo '==========' . PHP_EOL;
        echo 'Rendering Windows Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('windows')) . PHP_EOL;

        echo '==========' . PHP_EOL;
        echo 'Rendering Linux Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('linux')) . PHP_EOL;

        echo '==========' . PHP_EOL;
        echo 'Rendering Android Button and Checkbox: ' . PHP_EOL . PHP_EOL;
        echo $clientService->renderUI($familyResolver->resolve('android')) . PHP_EOL;

        return Command::SUCCESS;
    }
}
