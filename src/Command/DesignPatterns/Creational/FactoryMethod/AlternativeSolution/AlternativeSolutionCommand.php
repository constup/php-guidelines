<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\FactoryMethod\AlternativeSolution;

use App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution\Factory1;
use App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution\ServiceX;
use App\DesignPatterns\Creational\FactoryMethod\AlternativeSolution\ServiceY;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:factory-method:alternative-solution',
    description: 'Example of an alternative solution to Factory Method Design Pattern.',
)]
class AlternativeSolutionCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /**
         * You will probably want to instantiate Concrete Factories and Services in another way, either somewhere else
         * inside your code or in the Dependency Injection Container.
         */
        $factory = new Factory1();
        $serviceX = new ServiceX($factory);
        $serviceY = new ServiceY($factory);

        echo 'Calling ServiceX->operationX():' . PHP_EOL;
        echo $serviceX->operationX();
        echo PHP_EOL . '----------' . PHP_EOL;

        echo 'Calling ServiceY->operationY():' . PHP_EOL;
        echo $serviceY->operationY();
        echo PHP_EOL . '----------' . PHP_EOL;

        return Command::SUCCESS;
    }
}
