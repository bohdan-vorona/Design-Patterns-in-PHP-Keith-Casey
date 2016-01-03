<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class GreetingController extends DefaultController
{
    protected $model = null;

    public function __construct()
    {
        $this->model = new Greeting();
    }

    public function hello()
    {
        $message = $this->model->hello();

        include_once 'views/message.php';
    }

    public function goodbye()
    {
        $message = $this->model->goodbye();

        include_once 'views/message.php';
    }

}