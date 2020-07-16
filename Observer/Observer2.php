<?php

interface Observable
{
    public function attach(Observer $ob);
    public function detach(Observer $ob);
    public function notify();
}

interface Observer
{
    public function update(Observable $observable);
}

class Login implements Observable
{
    private $user;
    private $observers = [];

    public function attach(Observer $ob)
    {
        $this->observers[] = $ob;
    }

    public function detach(Observer $ob)
    {
        $this->observers = array_filter($this->observers, function ($item) use ($ob) {
            return $item !== $ob;
        });
    }

    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }

    public function handleLogin()
    {
        // do login
        $this->notify();
    }
}

class SendMail implements Observer
{
    public function update(Observable $login)
    {
        echo 'send email to admin';
    }
}

$login = new Login();
$login->attach(new SendMail());