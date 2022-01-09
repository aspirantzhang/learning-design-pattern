<?php

declare(strict_types=1);

namespace zhang;

class BlackListFilter extends FilterDecorator
{
    public function check(Request $request)
    {
        echo 'black list check. ';
        $this->filter->check($request);
    }
}
