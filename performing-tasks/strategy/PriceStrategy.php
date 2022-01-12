<?php

declare(strict_types=1);

namespace zhang;

abstract class PriceStrategy
{
    abstract public function calculate();
}
