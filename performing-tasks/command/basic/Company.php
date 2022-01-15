<?php

declare(strict_types=1);

namespace zhang\command\basic;

class Company
{
    private Command $command;

    public function getCommand(Command $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}
