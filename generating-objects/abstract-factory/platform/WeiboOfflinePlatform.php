<?php

declare(strict_types=1);

namespace zhang;

class WeiboOfflinePlatform extends OfflinePlatform
{
    public function sendMessage()
    {
        return 'sent by offline weibo';
    }
}
