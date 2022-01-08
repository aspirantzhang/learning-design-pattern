<?php

namespace zhang;

require_once('Ad.php');
require_once('Promotion.php');
require_once('WeiboAd.php');
require_once('WechatAd.php');

// $promotion = new Promotion();
// $promotion->addAd(new WeiboAd());
// $promotion->addAd(new WechatAd());
// var_dump($promotion->getTotalClientNumber());

$innerTeam = new Promotion();
$innerTeam->addAd(new WeiboAd());
$innerTeam->addAd(new WeiboAd());

$outerTeam = new Promotion();
$outerTeam->addAd(new WeiboAd());
$outerTeam->addAd(new WechatAd());

$innerTeam->addAd($outerTeam);
var_dump($innerTeam->getClientNumber());
