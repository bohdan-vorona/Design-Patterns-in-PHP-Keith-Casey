<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require 'vendor/autoload.php';

use Zend\EventManager\EventManager;

$events = new EventManager();
$events->attach('load', function ($e) {
    $event = $e->getName();
    $params = $e->getParams();
    echo "Just captured event $event with these parameters: " . json_encode($params) . "\n";
});

$params = array('city' => 'Austin', 'state' => 'Texas');
$events->trigger('load', null, $params);
$events->trigger('test', null, $params);
