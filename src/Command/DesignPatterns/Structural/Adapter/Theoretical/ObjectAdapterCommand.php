<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Structural\Adapter\Theoretical;

use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ObjectAdapter\Adapter;
use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ObjectAdapter\ClientService;
use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ObjectAdapter\ConcreteAdaptee;
use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ObjectAdapter\ConcreteTarget;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:adapter:theoretical:object-adapter',
    description: 'Theoretical `Object adapter` example.'
)]
class ObjectAdapterCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:adapter:theoretical:object-adapter
     * Run this command in local: php bin/console design-patterns:adapter:theoretical:object-adapter
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

        echo 'Theoretical `Object adapter` example.' . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        echo 'Running a method from `TargetInterface`...' . PHP_EOL;
        $target = new ConcreteTarget();
        echo $clientService->doSomething($target) . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        echo 'Running a method from `AdapteeInterface`...' . PHP_EOL;
        $adaptee = new ConcreteAdaptee();
        $target = new Adapter($adaptee);
        echo $clientService->doSomething($target) . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        return Command::SUCCESS;
    }
}
