<?php

declare(strict_types=1);

namespace zhang;

class LoginEmailNotify extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        echo "\n" . 'Login email sent to ' . $login->email;
    }
}
