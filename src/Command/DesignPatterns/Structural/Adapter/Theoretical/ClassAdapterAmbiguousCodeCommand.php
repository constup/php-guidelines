<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Structural\Adapter\Theoretical;

use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AmbiguousCall\Adapter;
use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AmbiguousCall\ClientService;
use App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AmbiguousCall\ConcreteTarget;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:adapter:theoretical:class-adapter:ambiguous-code',
    description: 'This example demonstrates ambiguous polymorphic code usage by accessing a method which is present only in some concrete implementations of the `TargetInterface` - namely, the `Adapter`.'
)]
class ClassAdapterAmbiguousCodeCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:adapter:theoretical:class-adapter:ambiguous-code
     * Run this command in local: php bin/console design-patterns:adapter:theoretical:class-adapter:ambiguous-code
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

        echo 'This example demonstrates ambiguous polymorphic code usage by accessing an Adaptee\'s method,' . PHP_EOL;
        echo 'which is not present in original Concrete Classes of the `TargetInterface`' . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        echo 'Running a method from `ConcreteAdaptee`...' . PHP_EOL;
        $target = new Adapter();
        echo $clientService->doSomething($target) . PHP_EOL . PHP_EOL;
        echo 'Another very dangerous property of using this hack implementation of the Class Adapter is that all the code above will be executed before the error below is thrown.' . PHP_EOL;
        echo 'If the code above changes any external data (for example: writes to database, or makes an API call to a third party application),' . PHP_EOL;
        echo 'but the code below throws an error and does not finish the application flow correctly,' . PHP_EOL;
        echo 'you will have corrupted data and potentially very dangerous situations, including severe security risks.' . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        echo 'Running a method from `TargetInterface`...' . PHP_EOL;
        echo 'It should throw an error and break the application.' . PHP_EOL;
        $target = new ConcreteTarget();
        echo $clientService->doSomething($target) . PHP_EOL;
        echo '----------' . PHP_EOL . PHP_EOL;

        return Command::SUCCESS;
    }
}
