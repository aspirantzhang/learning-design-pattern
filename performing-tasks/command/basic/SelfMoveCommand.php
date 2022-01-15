<?php

declare(strict_types=1);

namespace zhang\command\basic;

class SelfMoveCommand implements Command
{
    private Mover $mover;

    public function __construct(Mover $mover)
    {
        $this->mover = $mover;
    }
    public function execute()
    {
        $this->mover->drive();
    }
}
