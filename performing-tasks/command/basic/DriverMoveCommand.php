<?php

declare(strict_types=1);

namespace zhang\command\basic;

class DriverMoveCommand implements Command
{
    private $mover;

    public function __construct(Mover $mover)
    {
        $this->mover = $mover;
    }
    public function execute()
    {
        $this->mover->pack();
        $this->mover->carry();
        $this->mover->drive();
        $this->mover->unpack();
    }
}
