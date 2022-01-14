<?php

declare(strict_types=1);

namespace zhang\visitor;

class WechatAdOther extends WechatAd
{
    public function getClientNumber()
    {
        return 5;
    }

    public function accept(AdVisitor $visitor)
    {
        $visitor->visitWechatAdOther($this);
    }
}
