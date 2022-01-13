<?php

namespace zhang;

require_once('Login.php');
require_once('LoginObserver.php');
require_once('LoginEmailNotify.php');
require_once('StandardLog.php');
/*
    Login
*/
$login = new Login();
new LoginEmailNotify($login);
new StandardLog($login);
$login->doLogin('UserName', 'admin@aspirantzhang.com');
