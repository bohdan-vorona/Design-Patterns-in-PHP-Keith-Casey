<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

use Zend\Db\TableGateway\TableGateway as TableGateway;
use Zend\Db\Adapter\Adapter;

class UserGateway extends TableGateway
{
    public function __construct()
    {
        $configArray = array(
            'driver' => 'Mysqli',
            'database' => 'development',
            'username' => 'developer',
            'password' => 'developer',
            'options' => array('buffer_results' => true)
        );

        $adapter = new Zend\Db\Adapter\Adapter($configArray);

        parent::__construct('users', $adapter);
    }
}