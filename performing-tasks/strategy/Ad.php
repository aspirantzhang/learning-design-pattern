<?php

declare(strict_types=1);

namespace zhang;

abstract class Ad
{
    protected $priceStrategy;

    public function __construct(PriceStrategy $priceStrategy)
    {
        $this->priceStrategy = $priceStrategy;
    }
    
    abstract public function getPrice();
}
