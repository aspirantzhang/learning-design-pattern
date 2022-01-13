<?php

declare(strict_types=1);

namespace zhang;

class Login implements \SplSubject
{
    private \SplObjectStorage $observerStorage;
    public string $username;
    public string $email;

    public function __construct()
    {
        $this->observerStorage = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->observerStorage->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observerStorage->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observerStorage as $obs) {
            $obs->update($this);
        }
    }
    
    public function doLogin(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
        echo 'do login...';
        $this->notify();
    }
}
