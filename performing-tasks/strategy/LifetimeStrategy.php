<?php

declare(strict_types=1);

namespace zhang;

class LifetimeStrategy extends PriceStrategy
{
    public function calculate()
    {
        return 1;
    }
}
