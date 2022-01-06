<?php

declare(strict_types=1);

namespace zhang;

class WechatNetworkPlatform extends NetworkPlatform
{
    public function sendMessage()
    {
        return 'sent by network wechat';
    }
}
