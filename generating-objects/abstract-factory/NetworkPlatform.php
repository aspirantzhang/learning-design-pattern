<?php

declare(strict_types=1);

namespace zhang;

abstract class NetworkPlatform
{
    abstract public function sendMessage();
}
