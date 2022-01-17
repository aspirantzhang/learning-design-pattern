<?php

declare(strict_types=1);

namespace zhang\nullObject;

class NullTask extends Task
{
    public function getPrice()
    {
        return 0;
    }

    public function isNull()
    {
        return true;
    }
}
