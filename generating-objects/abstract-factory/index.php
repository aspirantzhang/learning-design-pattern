<?php

namespace zhang;

require_once('Phone.php');
require_once('NetworkPlatform.php');
require_once('OfflinePlatform.php');
require_once('platform/WeiboNetworkPlatform.php');
require_once('platform/WechatNetworkPlatform.php');
require_once('platform/WeiboOfflinePlatform.php');
require_once('platform/WechatOfflinePlatform.php');
require_once('phone/WechatPhone.php');
require_once('phone/WeiboPhone.php');


$phone = new WechatPhone();
var_dump($phone->getNetworkPlatform()->sendMessage());
var_dump($phone->getOfflinePlatform()->sendMessage());

$phone = new WeiboPhone();
var_dump($phone->getNetworkPlatform()->sendMessage());
var_dump($phone->getOfflinePlatform()->sendMessage());
