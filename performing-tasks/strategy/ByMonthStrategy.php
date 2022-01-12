<?php

declare(strict_types=1);

namespace zhang;

class ByMonthStrategy extends PriceStrategy
{
    public function calculate()
    {
        return 500;
    }
}
