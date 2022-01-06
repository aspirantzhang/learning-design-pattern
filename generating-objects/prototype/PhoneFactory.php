<?php

declare(strict_types=1);

namespace zhang;

class PhoneFactory
{
    private NetworkPlatform $networkPlatform;
    private OfflinePlatform $offlinePlatform;

    public function __construct(NetworkPlatform $networkPlatform, OfflinePlatform $offlinePlatform)
    {
        $this->networkPlatform = $networkPlatform;
        $this->offlinePlatform = $offlinePlatform;
    }

    public function getNetworkPlatform(): NetworkPlatform
    {
        return clone $this->networkPlatform;
    }

    public function getOfflinePlatform(): OfflinePlatform
    {
        return clone $this->offlinePlatform;
    }
}
