<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class Email
{
    protected $to = '';
    protected $from = '';
    protected $body = '';
    protected $subject = '';

    public function setProperties($to, $from, $subject, $body)
    {
        $this->to = $to;
        $this->from = $from;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * This is commented out but would use PHP's default email sender to send a message.
     */
    public function send()
    {
        echo __CLASS__ . " - This would have sent an email.";
        // return mail($this->to, $this->subject, $this->body);
    }
}