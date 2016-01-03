<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'email.php';

$email = new Email();
$email->setProperties('test@example.com', 'from@example.com', 'Subject', 'This is the body');
$email->send();