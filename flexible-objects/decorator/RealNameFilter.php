<?php

declare(strict_types=1);

namespace zhang;

class RealNameFilter extends FilterDecorator
{
    public function check(Request $request)
    {
        echo 'real name check. ';
        $this->filter->check($request);
    }
}
