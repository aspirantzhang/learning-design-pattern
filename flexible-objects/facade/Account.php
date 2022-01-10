<?php

declare(strict_types=1);

namespace zhang;

class Account
{
    public function __construct(string $accountName)
    {
    }
    
    public function check(Order $order)
    {
        echo 'account check passed.';
    }
}
