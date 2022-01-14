<?php

declare(strict_types=1);

namespace zhang\visitor;

class OffSeasonAdVisitor extends AdVisitor
{
    private $offSeasonClientNumber;

    public function visitWechatAd(WechatAd $wechatAd)
    {
        echo 'visitWechatAd';
        echo "\n";
        $this->offSeasonClientNumber += $wechatAd->getClientNumber() * 0.8;
    }
    
    public function visitWeiboAd(WeiboAd $weiboAd)
    {
        echo 'visitWeiboAd';
        echo "\n";
        $this->offSeasonClientNumber += $weiboAd->getClientNumber() * 0.5;
    }

    public function visitWechatAdOther(WechatAdOther $wechatAdOther)
    {
        $this->offSeasonClientNumber += $wechatAdOther->getClientNumber() * 0.1;
    }

    public function getOffSeasonClientNumber()
    {
        return $this->offSeasonClientNumber;
    }
}
