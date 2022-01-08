<?php

declare(strict_types=1);

namespace zhang;

class Promotion extends Ad
{
    private array $ads = [];
    
    public function addAd(Ad $ad)
    {
        $this->ads[] = $ad;
    }

    public function getClientNumber()
    {
        $number = 0;
        foreach ($this->ads as $ad) {
            $number += $ad->getClientNumber();
        }
        return $number;
    }
}
