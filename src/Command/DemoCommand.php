<?php

namespace App\Command;

use App\Kernel;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'demo')]
class DemoCommand extends Command
{
    public function __construct(public Kernel $kernel)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        ray()->newScreen();

        ray('hey basel 👋');
        ray('hey basel 👋')->label('important');
        ray('hey basel important 👋')->red();
        ray('hey basel 👋')->orange();
        ray('hey basel 👋')->green();
        ray('hey basel 👋')->large();

        ray('ray rules', ['foo' => 'bar', $this->kernel]);

        ray()->confetti();

        return Command::SUCCESS;
    }
}
