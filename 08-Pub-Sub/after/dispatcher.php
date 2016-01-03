<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class Dispatcher
{
    protected $listeners = array();

    protected function __construct() { }

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    public static function subscribe($object, $subscriber)
    {
        $instance = Dispatcher::getInstance();
        $id = spl_object_hash($object);

        $instance->listeners[$id][] = $subscriber;
    }

    public static function publish($object)
    {
        $instance = Dispatcher::getInstance();
        $id = spl_object_hash($object);

        $subscribers = $instance->listeners[$id];

        foreach($subscribers as $subscriber) {
            $subscriber->doSomething();
        }
    }
}