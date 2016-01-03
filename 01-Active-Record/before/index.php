<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'user.php';

$connection = new PDO("mysql:host=localhost;dbname=development", 'developer', 'developer');

$sql = 'SELECT * FROM users WHERE user_id = 2';

$result = $connection->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);

$user = new User();
$user->user_id = $row['user_id'];
$user->user_first_name = $row['user_first_name'];
$user->user_last_name = $row['user_last_name'];
$user->user_company = $row['user_company'];
$user->user_email = $row['user_email'];

echo '<pre>';
print_r($user);