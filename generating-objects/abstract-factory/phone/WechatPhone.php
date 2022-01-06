<?php

declare(strict_types=1);

namespace zhang;

class WechatPhone extends Phone
{
    public function getNetworkPlatform(): NetworkPlatform
    {
        return new WechatNetworkPlatform();
    }

    public function getOfflinePlatform(): OfflinePlatform
    {
        return new WechatOfflinePlatform();
    }
}
