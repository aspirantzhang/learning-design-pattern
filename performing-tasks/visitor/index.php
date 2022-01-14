<?php

namespace zhang\visitor;

require_once('Ad.php');
require_once('Promotion.php');
require_once('WeiboAd.php');
require_once('WechatAd.php');
require_once('AdVisitor.php');
require_once('OffSeasonAdVisitor.php');

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

/*
    Once you give him a key, he can come unlimited times.
    key  => accept() in leaf
    come => visit() in visitor
 */
$offSeasonVisitor = new OffSeasonAdVisitor();
$innerTeam->accept($offSeasonVisitor);
var_dump($offSeasonVisitor->getOffSeasonClientNumber());
