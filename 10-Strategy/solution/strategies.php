<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class NumberFilter
{
    protected $strategy = null;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function filter($number)
    {
        $this->strategy->filter($number);
    }
}

class EvenStrategy
{
    public function filter($number)
    {
        if (0 == $number % 2) {
            echo $number . "\n";
        }
    }
}

class OddStrategy
{
    public function filter($number)
    {
        if (1 == $number % 2) {
            echo $number . "\n";
        }
    }
}