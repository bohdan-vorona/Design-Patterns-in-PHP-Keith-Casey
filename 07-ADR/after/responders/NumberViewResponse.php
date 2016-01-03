<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class NumberViewResponse
{
    protected $domain = null;
    public $number = 0;

    public function __construct()
    {
        $this->domain = new Number();
    }

    public function run()
    {
        $value = $this->domain->square($this->number);

        include 'templates/view_number.php';
    }
}