<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class Shape
{
    public static function getShape($name, $dimension)
    {
        switch($name) {
            case 'circle':
                return new Circle($dimension);
            case 'square':
                return new Square($dimension);
            default:
                throw new Exception("Unrecognized shape");
        }
    }
}

class Circle
{
    protected $radius = 0;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}

class Square
{
    protected $side = 0;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getArea()
    {
        return $this->side * $this->side;
    }
}