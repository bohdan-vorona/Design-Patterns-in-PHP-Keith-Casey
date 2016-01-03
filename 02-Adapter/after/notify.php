<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class Notify
{
    protected $username = '';
    protected $password = '';

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function send($to, $from, $body, $subject = '')
    {
        // If there's no subject specified, let's assume we're sending a text message.
        if ('' == $subject) {
            return $this->sendSMS($to, $from, $body);
        } else {
            return $this->sendEmail($to, $from, $body, $subject);
        }
    }

    protected function sendSMS($to, $from, $body)
    {
        $twilio = new Services_Twilio($this->username, $this->password);

        $message = $twilio->account->messages->sendMessage(
            $from,
            $to,
            $body
        );

        return $message;
    }

    protected function sendEmail($to, $from, $body, $subject)
    {
        $sendgrid = new SendGrid('fake username2', 'fake password 2');
        $email    = new SendGrid\Email($this->username, $this->password);
        $email->addTo($to)->
            setFrom($from)->
            setSubject($subject)->
            setText($body)->
            setHtml($body);

        return $sendgrid->send($email);
    }
}