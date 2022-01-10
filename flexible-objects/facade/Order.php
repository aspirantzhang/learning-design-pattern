<?php

declare(strict_types=1);

namespace zhang;

class Order
{
    public function save(string $address)
    {
        echo 'new order object created.';
        return $this;
    }
}
