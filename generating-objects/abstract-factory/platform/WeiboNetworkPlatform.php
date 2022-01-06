<?php

declare(strict_types=1);

namespace zhang;

class WeiboNetworkPlatform extends NetworkPlatform
{
    public function sendMessage()
    {
        return 'sent by network weibo';
    }
}
