<?php

declare(strict_types=1);

namespace zhang;

abstract class FilterDecorator extends Filter
{
    protected Filter $filter;
    
    public function __construct(Filter $filter)
    {
        $this->filter = $filter;
    }
}
