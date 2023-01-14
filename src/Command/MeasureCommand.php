<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'measure')]
class MeasureCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        ray()->newScreen('Measure demo');

        ray()->measure();

        sleep(1);

        ray()->measure();

        sleep(2);

        ray()->measure();

        return Command::SUCCESS;
    }
}
