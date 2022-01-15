<?php

declare(strict_types=1);

namespace zhang\command\basic;

class Mover
{
    public function pack()
    {
        echo 'packing...';
    }

    public function carry()
    {
        echo 'carrying...';
    }

    public function drive()
    {
        echo 'driving...';
    }

    public function unpack()
    {
        echo 'unpacking...';
    }
}
