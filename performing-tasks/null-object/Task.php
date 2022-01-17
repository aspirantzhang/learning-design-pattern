<?php

declare(strict_types=1);

namespace zhang\nullObject;

abstract class Task
{
    public function isNull()
    {
        return false;
    }
    abstract public function getPrice();
}
