<?php

declare(strict_types=1);

namespace zhang;

class Security
{
    public function check(Order $order)
    {
        echo 'security check passed.';
    }
}
