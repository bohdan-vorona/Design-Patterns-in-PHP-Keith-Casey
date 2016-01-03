<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'output.php';

$input = 10;

$output = new Output();

echo $output->square($input) . '<br />';
echo $output->cube($input) . '<br />';
echo $output->fourth($input)  . '<br />';