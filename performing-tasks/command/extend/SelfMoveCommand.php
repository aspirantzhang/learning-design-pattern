<?php

declare(strict_types=1);

namespace zhang\command\extend;

class SelfMoveCommand implements Command
{
    public function execute()
    {
        echo 'driving...';
    }
}
