<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require 'vendor/autoload.php';

include_once 'controllers/default_controller.php';
include_once 'controllers/number_controller.php';
include_once 'models/number_model.php';

$app = new \Slim\Slim();

$app->get('/', function() {
    include 'views/default.php';
});

$app->get('/:module(/:number)', function ($module, $number = 1) {
    switch($module) {
        case 'number':
            $controller = new NumberController();
            break;
        default:
            $controller = new DefaultController();
    }

    $action = 'view';

    $controller->run($action, $number);
});

$app->run();