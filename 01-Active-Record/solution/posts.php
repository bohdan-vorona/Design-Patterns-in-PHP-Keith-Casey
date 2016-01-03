<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Post extends Illuminate\Database\Eloquent\Model
{
    public function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            "driver"    => "mysql",
            "host"      => "localhost",
            "database"  => "development",
            "username"  => "developer",
            "password"  => "developer",
            "charset"   => "utf8",
            "collation" => "utf8_general_ci",
            "prefix"    => ""
        ]);

        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->bootEloquent();
    }
}