<?php

declare(strict_types=1);

namespace zhang;

class WechatOfflinePlatform extends OfflinePlatform
{
    public function sendMessage()
    {
        return 'sent by offline wechat';
    }
}
