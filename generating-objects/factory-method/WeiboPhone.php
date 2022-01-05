<?php

declare(strict_types=1);

namespace zhang;

class WeiboPhone extends Phone
{
    public function getPlatform()
    {
        return new WeiboPlatform();
    }
}
