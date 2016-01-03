<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'user.php';

$gateway = new UserGateway();

$users = $gateway->loadAll();
foreach ($users as $user) {
    echo $user['user_username'] . '<br />';
}

echo '<hr />';

$user = $gateway->loadById(2);
echo $user['user_username'];