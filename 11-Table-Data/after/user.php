<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

class UserGateway
{
    protected $connection = null;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=development", 'developer', 'developer');
    }

    public function loadAll()
    {
        $sql = 'SELECT * FROM users';
        $rows = $this->connection->query($sql);

        return $rows;
    }

    public function loadById($id)
    {
        $sql = 'SELECT * FROM users WHERE user_id = ' . (int) $id;
        $result = $this->connection->query($sql);

        return $result->fetch();
    }
}