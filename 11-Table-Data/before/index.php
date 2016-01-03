<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */


$connection = new PDO("mysql:host=localhost;dbname=development", 'developer', 'developer');

$sql = 'SELECT * FROM users';
foreach ($connection->query($sql) as $row) {
    echo $row['user_username'] . '<br />';
}

echo '<hr />';

$sql = 'SELECT * FROM users WHERE user_id = 2';

$result = $connection->query($sql);
$row = $result->fetch();

echo $row['user_username'];