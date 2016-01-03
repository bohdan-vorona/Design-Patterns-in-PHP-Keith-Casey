<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class Component
{
    protected $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addOneAndEcho($i)
    {
        $i++;
        echo $i . '-' . $this->name . '<br />';

        $instance = Dispatcher::getInstance();
        $instance::publish($this, $i);

        return $i;
    }
}