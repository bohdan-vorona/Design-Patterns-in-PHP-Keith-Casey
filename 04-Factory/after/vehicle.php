<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class Vehicle
{
    public static function create($type, $wheels)
    {
        switch($type) {
            case 'car':
                return new Car($wheels);
            case 'truck':
                return new Truck($wheels);
            default:
                return new stdClass();
        }
    }

    public function getType()
    {
        return get_class($this);
    }
}

class Car extends Vehicle { }

class Truck extends Vehicle { }