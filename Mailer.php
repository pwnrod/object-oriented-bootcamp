<?php

abstract class Mailer
{
    public function send($to, $from, $body)
    {

    }
}

class UserMailer extends Mailer {
    public function sendWelcomeEmail()
    {
        return $this->send($user->email);
    }
}

class AdminMailer extends Mailer {

}