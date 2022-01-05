<?php

declare(strict_types=1);

namespace zhang;

abstract class Phone
{
    abstract public function getPlatform(): Platform; // Attention here, the return type is Platform
    // here is refactor method
}
