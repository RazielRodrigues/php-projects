<?php

namespace App\Maker;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;

final class MakeNewClass extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:newclass';
    }

    public static function getCommandDescription(): string
    {
        return 'Create a new class';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig): void
    {
        $command->setHelp(file_get_contents(__DIR__ . '/NewClass.txt'));
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void
    {
        $generator->generateClass(
            'App\Maker\NewClass',
            __DIR__ .  '/NewClass.tpl.php'
        );

        $generator->writeChanges();
        $this->writeSuccessMessage($io);
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
    }
}
