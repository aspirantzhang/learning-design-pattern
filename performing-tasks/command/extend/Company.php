<?php

declare(strict_types=1);

namespace zhang\command\extend;

class Company
{
    private CommandContext $commandContext;

    public function __construct()
    {
        $this->commandContext = new CommandContext();
    }

    public function getContext()
    {
        return $this->commandContext;
    }

    public function run()
    {
        $commandObj = CommandFactory::getCommand($this->commandContext->getCommand());
        $commandObj->execute();
    }
}
