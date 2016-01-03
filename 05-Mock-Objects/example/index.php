<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require_once 'vendor/autoload.php';
include_once 'email.php';

$email = \Mockery::mock('\Email')->makePartial();
$email->shouldReceive('send')->andReturn(true);

$email->setProperties('test@example.com', 'from@example.com', 'Subject', 'This is the body');

$email->send();