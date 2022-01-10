<?php

namespace zhang;

require_once('OrderFacade.php');
require_once('Order.php');
require_once('Account.php');
require_once('Security.php');

/*
    submit a new order
    -> Order::save($address)
    -> Order::getOrder()
    -> Account::check(Order $order)
    -> Security::check(Order $order)
*/

$account = new Account('account name');
$security = new Security();
$order = new OrderFacade($account, $security);
$order->addNew('address');
