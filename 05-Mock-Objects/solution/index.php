<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'database.php';
include_once 'mock.php';

$user = new MockUser();

$result = $user->delete(1);

if ($result) {
    echo "We deleted a user!";
} else {
    echo "We did not delete a user.";
}