<?php

namespace zhang;

require_once('Ad.php');
require_once('IndoorAd.php');
require_once('OutdoorAd.php');
require_once('PriceStrategy.php');
require_once('ByYearStrategy.php');
require_once('ByMonthStrategy.php');
require_once('LifetimeStrategy.php');

/*
    Ad department
    - Indoor Ad
    - Outdoor Ad

    Strategy
    - by Year
    - by Month
    - by Lifetime
*/

$ad = new IndoorAd(new ByMonthStrategy());
var_dump($ad->getPrice());
