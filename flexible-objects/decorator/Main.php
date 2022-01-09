<?php

declare(strict_types=1);

namespace zhang;

class Main extends Filter
{
    public function check(Request $request)
    {
        echo 'do something useful...';
    }
}
