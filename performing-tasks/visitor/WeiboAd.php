<?php

declare(strict_types=1);

namespace zhang\visitor;

class WeiboAd extends Ad
{
    public function getClientNumber()
    {
        return 20;
    }

    public function accept(AdVisitor $visitor)
    {
        $visitor->visitWeiboAd($this);
    }
}
