<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */


$connection = new PDO("mysql:host=localhost;dbname=development", 'developer', 'developer');

$sql = 'SELECT * FROM posts';
foreach ($connection->query($sql) as $row) {
    echo $row['title'] . '<br />';
}

echo '<hr />';

$sql = 'SELECT * FROM posts WHERE id = 1';

$result = $connection->query($sql);
$row = $result->fetch();

echo $row['title'];