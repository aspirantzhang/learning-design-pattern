<?php

declare(strict_types=1);

namespace zhang;

abstract class LoginObserver implements \SplObserver
{
    private Login $login;
    
    public function __construct(Login $login) // here, only Login type parameter is allowed
    {
        $this->login = $login;
        $weakObj = \WeakReference::create($this);
        $login->attach($weakObj->get());
    }

    public function update(\SplSubject $subject)
    {
        if ($subject === $this->login) {    // and here, check types are equal, to ensure that correct class type is used
            $this->doUpdate($subject);
        } else {
            echo 'wrong type';
        }
    }

    abstract public function doUpdate(Login $login);
}
