<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'controllers/default_controller.php';
include_once 'controllers/greeting_controller.php';
include_once 'models/greeting.php';

$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$module = isset($_GET['m']) ? $_GET['m'] : '';

switch($module) {
    case 'greeting':
        $controller = new GreetingController();
        break;
    default:
        $controller = new DefaultController();
}

$controller->run($action);