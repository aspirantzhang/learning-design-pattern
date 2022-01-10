<?php

declare(strict_types=1);

namespace zhang;

class OrderFacade
{
    private $order;
    private $account;
    private $security;

    public function __construct(Account $account, Security $security)
    {
        $this->account = $account;
        $this->security = $security;
    }

    public function addNew($address)
    {
        $this->order = (new Order())->save($address);
        $this->account->check($this->order);
        $this->security->check($this->order);
        echo 'added successfully';
    }
}
