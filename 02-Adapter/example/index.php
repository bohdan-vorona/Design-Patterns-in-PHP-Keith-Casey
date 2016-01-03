<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require 'vendor/autoload.php';

$configArray = array(
    'driver' => 'Mysqli',
    'database' => 'adapter_example',
    'username' => 'admin',
    'password' => 'password'
);

$adapter = new Zend\Db\Adapter\Adapter($configArray);

$configArray = array(
    'driver' => 'Pdo_Sqlite',
    'database' => 'path/to/sqlite.db'
);

$adapter = new Zend\Db\Adapter\Adapter($configArray);