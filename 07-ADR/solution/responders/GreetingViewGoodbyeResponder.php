<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class GreetingViewGoodbyeResponder
{
    protected $domain = null;

    public function __construct()
    {
        $this->domain = new Greeting();
    }

    public function run()
    {
        $message = $this->domain->goodbye();

        include 'templates/message.php';
    }
}