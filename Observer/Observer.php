<?php

class Login
{
    public function handleLogin($user, $pass, $ip)
    {
        // do login


        Logger::info();
        Notifier::mail();
        Gift::send();
    }
}

class Logger
{
    public static function info()
    {
        echo 'log info';
    }
}

class Notifier
{
    public static function mail()
    {
        echo 'send mail';
    }
}

class Gift
{
    public static function send()
    {
        echo 'send gift';
    }
}