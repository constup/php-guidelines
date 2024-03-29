<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Structural\Adapter\Theoretical;

use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AdapterExtendsAdaptee\Adapter;
use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AdapterExtendsAdaptee\ClientService;
use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AdapterExtendsAdaptee\ConcreteTarget;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:adapter:theoretical:class-adapter:adapter-extends-adaptee',
    description: 'Theoretical `Class adapter` example. In this implementation, `Adapter` is extending `Adaptee` and implementing `TargetInterface`.'
)]
class ClassAdapterExtendsAdapteeCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:adapter:theoretical:class-adapter:adapter-extends-adaptee
     * Run this command in local: php bin/console design-patterns:adapter:theoretical:class-adapter:adapter-extends-adaptee
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $clientService = new ClientService();

        echo 'Theoretical `Class adapter` example. In this implementation, `Adapter` is extending `Adaptee` and implementing `TargetInterface`.' . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        echo 'Running a method from `TargetInterface`...' . PHP_EOL;
        $target = new ConcreteTarget();
        echo $clientService->doSomething($target) . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        echo 'Running a method from `ConcreteAdaptee`...' . PHP_EOL;
        $target = new Adapter();
        echo $clientService->doSomething($target) . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        return Command::SUCCESS;
    }
}
