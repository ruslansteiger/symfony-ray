<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'info')]
class InfoCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        ray()->newScreen('Info demo');

        ray()->phpinfo();

//        ray()->phpinfo('xdebug.enabled');

        return Command::SUCCESS;
    }
}
