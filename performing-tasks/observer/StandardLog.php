<?php

declare(strict_types=1);

namespace zhang;

class StandardLog extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        echo "\n" . 'write to log, user has login, username is:' . $login->username;
    }
}
