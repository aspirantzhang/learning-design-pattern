<?php

declare(strict_types=1);

namespace zhang\visitor;

abstract class AdVisitor
{
    abstract public function visitWechatAd(WechatAd $wechatAd);
    abstract public function visitWeiboAd(WeiboAd $weiboAd);
    abstract public function visitWechatAdOther(WechatAdOther $wechatAdOther);
}
