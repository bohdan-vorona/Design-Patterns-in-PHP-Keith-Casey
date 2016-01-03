<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'vehicle.php';

$car = new Car(4);
echo $car->getType();

echo '<br />';

$truck = new Truck(18);
echo $truck->getType();