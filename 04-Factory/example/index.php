<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require 'vendor/autoload.php';

//Load a php file as array
$config = Zend\Config\Factory::fromFile('config.json');

//Load a xml file as Config object
$config = Zend\Config\Factory::fromFile('config.xml', true);