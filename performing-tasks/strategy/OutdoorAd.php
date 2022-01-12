<?php

declare(strict_types=1);

namespace zhang;

class OutdoorAd extends Ad
{
    public function getPrice()
    {
        $this->priceStrategy->getPrice();
    }
}
