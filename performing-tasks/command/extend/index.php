<?php

namespace zhang\command\extend;

require_once('Company.php');
require_once('Command.php');
require_once('CommandContext.php');
require_once('CommandFactory.php');
require_once('DriverMoveCommand.php');
require_once('SelfMoveCommand.php');

$company = new Company();
$context = $company->getContext();
// $context->setCommand('SelfMove');
$context->setCommand('DriverMove');
$company->run();
