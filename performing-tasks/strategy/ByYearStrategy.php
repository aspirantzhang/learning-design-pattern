<?php

declare(strict_types=1);

namespace zhang;

class ByYearStrategy extends PriceStrategy
{
    public function calculate()
    {
        return 100;
    }
}
