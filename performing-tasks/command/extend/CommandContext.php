<?php

declare(strict_types=1);

namespace zhang\command\extend;

class CommandContext
{
    private string $command;

    public function setCommand(string $command)
    {
        $this->command = $command;
    }

    public function getCommand()
    {
        return $this->command;
    }
}
