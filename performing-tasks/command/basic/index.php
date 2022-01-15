<?php

namespace zhang\command\basic;

require_once('Company.php');
require_once('Command.php');
require_once('DriverMoveCommand.php');
require_once('SelfMoveCommand.php');
require_once('Mover.php');

// company = Invoker
$company = new Company();
// mover = Receiver
$command = new SelfMoveCommand(new Mover());
$command2 = new DriverMoveCommand(new Mover());
$company->getCommand($command2);
$company->run();
