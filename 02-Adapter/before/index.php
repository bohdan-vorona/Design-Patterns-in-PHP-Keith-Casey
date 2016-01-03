<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require 'vendor/autoload.php';

$twilio = new Services_Twilio('fake username', 'fake password');

$message = $twilio->account->messages->sendMessage(
    '+14085551234', // The number to send from, must be owned by your Twilio account
    '+12125551234', // The number to send to
    "Hello monkey!"
);


$sendgrid = new SendGrid('fake username2', 'fake password 2');
$email    = new SendGrid\Email();
$email->addTo('destination@example.com')->
    setFrom('sender@example.com')->
    setSubject('My great subject line')->
    setText('Hello World!')->
    setHtml('<strong>Hello World!</strong>');

$sendgrid->send($email);