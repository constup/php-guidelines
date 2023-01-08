<?php

declare(strict_types = 1);

namespace App\Command\DesignPatterns\Creational\FactoryMethod\PracticalExamples;

use App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\AbstractCreatorInternalUse\LinuxUI;
use App\DesignPatterns\Creational\FactoryMethod\PracticalExamples\AbstractCreatorInternalUse\WindowsUI;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'design-patterns:factory-method:practical:abstract-creator-internal-use',
    description: 'Factory Method Design Pattern example.',
)]
class AbstractCreatorInternalUseCommand extends Command
{
    /**
     * Run this command in Docker: docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:practical:abstract-creator-internal-use
     * Run this command in local: php bin/console design-patterns:factory-method:practical:abstract-creator-internal-use
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /**
         * You will probably want to instantiate Concrete Creators in another way, either somewhere else
         * inside your code or in the Dependency Injection Container.
         */
        $linuxUI = new LinuxUI();
        $windowsUI = new WindowsUI();

        echo 'Calling LinuxUI->renderLinuxButtons():' . PHP_EOL;
        echo $linuxUI->renderLinuxButtons();
        echo PHP_EOL . '----------' . PHP_EOL;

        echo 'Calling WindowsUI->renderWindowsButtons():' . PHP_EOL;
        echo $windowsUI->renderWindowsButtons();
        echo PHP_EOL . '----------' . PHP_EOL;

        return Command::SUCCESS;
    }
}
