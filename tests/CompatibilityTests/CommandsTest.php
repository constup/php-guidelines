<?php

declare(strict_types = 1);

namespace App\Tests\CompatibilityTests;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class CommandsTest extends KernelTestCase
{
    const EXPECTED_TO_FAIL_COMMANDS = [
        'design-patterns:adapter:theoretical:class-adapter:ambiguous-code'
    ];

    /**
     * Runs through all commands and tests if they are successful.
     *
     * @return void
     */
    public function testCommands(): void
    {
        $kernel = self::bootKernel();
        $application = new Application($kernel);

        $allCommands = $application->all('design-patterns');

        foreach ($allCommands as $command) {
            if (!in_array($command->getName(), self::EXPECTED_TO_FAIL_COMMANDS)) {
                echo "Running: " . $command->getName();
                $commandTester = new CommandTester($command);
                $commandTester->execute([]);
                $commandTester->assertCommandIsSuccessful();
            }
        }
    }
}
