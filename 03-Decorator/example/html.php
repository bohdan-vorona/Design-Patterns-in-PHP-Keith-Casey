<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class HTMLDecorator
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book = $book_object;
    }

    public function render()
    {
        $properties = get_object_vars($this->book);

        echo '<ul>';
        foreach($properties as $key => $value) {
            echo '<li>' . $key . ' -- ' . $value . '</li>';
        }
        echo '</ul>';
    }
}