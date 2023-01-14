<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples;

use App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\AbstractCreatorInternalUse\CreatorX;
use App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\AbstractCreatorInternalUse\CreatorY;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:factory-method:abstract-creator-internal-use',
    description: 'Factory Method Design Pattern example.',
)]
class AbstractCreatorInternalUseCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:abstract-creator-internal-use
     * Run this command in local: php bin/console design-patterns:factory-method:abstract-creator-internal-use
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /**
         * You probably want to instantiate Concrete Creators in another way, either somewhere else
         * inside your code or in the Dependency Injection Container.
         */
        $creatorX = new CreatorX();
        $creatorY = new CreatorY();

        echo 'Calling CreatorX->operationX():' . PHP_EOL;
        echo $creatorX->operationX();
        echo PHP_EOL . '----------' . PHP_EOL;

        echo 'Calling CreatorY->operationY():' . PHP_EOL;
        echo $creatorY->operationY();
        echo PHP_EOL . '----------' . PHP_EOL;

        return Command::SUCCESS;
    }
}
