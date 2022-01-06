<?php

declare(strict_types=1);

namespace zhang;

class WeiboPhone extends Phone
{
    public function getNetworkPlatform(): NetworkPlatform
    {
        return new WeiboNetworkPlatform();
    }

    public function getOfflinePlatform(): OfflinePlatform
    {
        return new WeiboOfflinePlatform();
    }
}
