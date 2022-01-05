<?php

namespace zhang;

require_once('Phone.php');
require_once('Platform.php');
require_once('WeiboPlatform.php');
require_once('WechatPlatform.php');
require_once('WechatPhone.php');
require_once('WeiboPhone.php');

// post a message to a social network

// $phone = new Phone(new WeiboPlatform);
// $phone->getPlatform()->sendMessage();

$phone = new WechatPhone();
var_dump($phone->getPlatform()->sendMessage());

$phone = new WeiboPhone();
var_dump($phone->getPlatform()->sendMessage());
