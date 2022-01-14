<?php

declare(strict_types=1);

namespace zhang\visitor;

abstract class Ad
{
    abstract public function getClientNumber();
    abstract public function accept(AdVisitor $visitor);
}
