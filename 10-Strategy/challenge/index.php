<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include 'strategies.php';

$even = new EvenStrategy();
$filter = new NumberFilter($even);

// This should output 2 4 6 8 10 with a newline between each
for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}

$odd = new OddStrategy();
$filter = new NumberFilter($odd);

// This should output 1 3 5 7 9 with a newline between each
for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}