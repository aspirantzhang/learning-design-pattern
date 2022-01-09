<?php

declare(strict_types=1);

namespace zhang;

abstract class Filter
{
    abstract public function check(Request $request);
}
