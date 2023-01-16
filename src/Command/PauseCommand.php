<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'pause')]
class PauseCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        ray()->newScreen('Pause demo');

        ray('Vor der Pause ...');

        ray()->pause();

        ray('nach der Pause.');

        return Command::SUCCESS;
    }
}
