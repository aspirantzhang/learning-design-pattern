<?php

declare(strict_types=1);

namespace zhang;

class Phone
{
    private $platform;

    public function __construct(Platform $platform)
    {
        $this->platform = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }
}
