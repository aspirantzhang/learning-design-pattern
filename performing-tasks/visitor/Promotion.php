<?php

declare(strict_types=1);

namespace zhang\visitor;

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
    
    public function accept(AdVisitor $visitor)
    {
        foreach ($this->ads as $ad) {
            $ad->accept($visitor);
        }
    }
}
