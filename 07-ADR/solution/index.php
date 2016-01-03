<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'actions/DefaultAction.php';
include_once 'actions/GreetingFactory.php';
include_once 'actions/GreetingViewHello.php';
include_once 'actions/GreetingViewGoodbye.php';
include_once 'domains/greeting.php';
include_once 'responders/DefaultResponder.php';
include_once 'responders/GreetingViewHelloResponder.php';
include_once 'responders/GreetingViewGoodbyeResponder.php';

$request = isset($_GET['a']) ? $_GET['a'] : 'index';
$module = isset($_GET['m']) ? $_GET['m'] : '';

switch($module) {
    case 'greeting':
        $action = GreetingFactory::getAction($request);
        break;
    default:
        $action = new DefaultAction();
}

$action->run();