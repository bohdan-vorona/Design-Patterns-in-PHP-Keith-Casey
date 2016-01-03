<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'shapes.php';

$shape = Shape::getShape('circle', 3);
// This should output 9*Pi
echo $shape->getArea();


$shape = Shape::getShape('square', 3);
// This should output 9
echo $shape->getArea();