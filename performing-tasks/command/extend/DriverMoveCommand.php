<?php

declare(strict_types=1);

namespace zhang\command\extend;

class DriverMoveCommand implements Command
{
    public function execute()
    {
        echo 'packing...';
        echo 'carrying...';
        echo 'driving...';
        echo 'unpacking...';
    }
}
