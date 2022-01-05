<?php

namespace zhang;

require_once('Preferences.php');

$option = Preferences::getInstance();
$option->addProp('username', 'zhang');
var_dump($option->getProp('username'));

$option2 = Preferences::getInstance();
var_dump($option2->getProp('username'));
