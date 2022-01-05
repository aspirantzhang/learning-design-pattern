<?php

declare(strict_types=1);

namespace zhang;

class WechatPlatform extends Platform
{
    public function sendMessage()
    {
        return 'sent by wechat';
    }
}
