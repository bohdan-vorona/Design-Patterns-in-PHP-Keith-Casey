<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class GreetingFactory
{
    public static function getAction($action)
    {
        switch($action) {
            case 'goodbye':
                return new GreetingViewGoodbye();
            case 'hello':
                return new GreetingViewHello();
            default:
                return new DefaultAction();
        }
    }
}