<?php

declare(strict_types=1);

namespace zhang\visitor;

class WechatAd extends Ad
{
    public function getClientNumber()
    {
        return 5;
    }

    public function accept(AdVisitor $visitor)
    {
        $visitor->visitWechatAd($this);
    }
}
