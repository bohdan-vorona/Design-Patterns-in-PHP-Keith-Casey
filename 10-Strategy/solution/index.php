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

for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}

$odd = new OddStrategy();
$filter = new NumberFilter($odd);

for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}