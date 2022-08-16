<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples;

use App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\ParameterizedFactoryMethod\CreatorX;
use App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\ParameterizedFactoryMethod\CreatorY;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:factory-method:parameterized-factory-method',
    description: 'Factory Method Design Pattern example.',
)]
class ParameterizedFactoryMethodCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /**
         * You will probably want to instantiate Concrete Creators in another way, either somewhere else
         * inside your code or in the Dependency Injection Container.
         */
        $creatorX = new CreatorX('test string value', 1);
        $creatorY = new CreatorY('another test string value', 2);

        echo 'Calling CreatorX->operationX():' . PHP_EOL;
        echo $creatorX->operationX();
        echo PHP_EOL . '----------' . PHP_EOL;

        echo 'Calling CreatorY->operationY():' . PHP_EOL;
        echo $creatorY->operationY();
        echo PHP_EOL . '----------' . PHP_EOL;

        return Command::SUCCESS;
    }
}
