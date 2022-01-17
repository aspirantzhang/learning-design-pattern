<?php

namespace zhang\nullObject;

require_once('Price.php');
require_once('Task.php');
require_once('NullTask.php');
require_once('PackTask.php');
require_once('DriveTask.php');

/*
    get task price
 */
$price = new Price();
$tasks = [
    new PackTask(),
    new NullTask(),
    new DriveTask(),
];
var_dump($price->getTotal($tasks));
//  add isNull() to base class return false, and NullObject class return true;
var_dump($price->getWorkingHours($tasks));
