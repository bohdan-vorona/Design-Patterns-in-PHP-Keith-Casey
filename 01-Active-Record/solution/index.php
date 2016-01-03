<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'posts.php';

$parameters = array('id' => null, 'title' => 'Sample Title', 'body' => 'This is the body', 'create_date' => '2015-01-27');

Post::create($parameters);