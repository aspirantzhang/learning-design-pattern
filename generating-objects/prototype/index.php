<?php

namespace zhang;

require_once('PhoneFactory.php');
require_once('NetworkPlatform.php');
require_once('OfflinePlatform.php');
require_once('platform/WeiboNetworkPlatform.php');
require_once('platform/WechatNetworkPlatform.php');
require_once('platform/WeiboOfflinePlatform.php');
require_once('platform/WechatOfflinePlatform.php');


$phone = new PhoneFactory(
    new WeiboNetworkPlatform(),
    new WeiboOfflinePlatform()
);
var_dump($phone->getNetworkPlatform()->sendMessage());
var_dump($phone->getOfflinePlatform()->sendMessage());

$phone = new PhoneFactory(
    new WechatNetworkPlatform(),
    new WechatOfflinePlatform()
);
var_dump($phone->getNetworkPlatform()->sendMessage());
var_dump($phone->getOfflinePlatform()->sendMessage());
