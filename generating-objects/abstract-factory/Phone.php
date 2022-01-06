<?php

declare(strict_types=1);

namespace zhang;

abstract class Phone
{
    abstract public function getNetworkPlatform(): NetworkPlatform;
    abstract public function getOfflinePlatform(): OfflinePlatform;
}
