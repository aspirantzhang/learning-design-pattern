<?php

declare(strict_types=1);

namespace zhang;

class WechatPhone extends Phone
{
    public function getPlatform()
    {
        return new WechatPlatform();
    }
}
