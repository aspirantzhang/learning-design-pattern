<?php

declare(strict_types=1);

namespace zhang;

class IndoorAd extends Ad
{
    public function getPrice()
    {
        return $this->priceStrategy->calculate();
    }
}
