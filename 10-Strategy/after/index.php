<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'output.php';
include_once 'square.php';
include_once 'cube.php';
include_once 'fourth.php';

$input = 10;

$output = new Output(new Square());
echo $output->display($input);

$output->setStrategy(new Cube());
echo $output->display($input);

$output->setStrategy(new Fourth());
echo $output->display($input);