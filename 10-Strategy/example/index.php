<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

require 'vendor/autoload.php';

$input = "This is a string of text that should be filtered & handle 's properly.";

$htmlEntities = new Zend\Filter\HtmlEntities();
echo $htmlEntities->filter($input);

echo '<br />';

$alphanumeric = new \Zend\I18n\Filter\Alnum();
echo $alphanumeric->filter($input);

echo '<br />';

// Now allow whitespace
$alphanumeric = new \Zend\I18n\Filter\Alnum(true);
echo $alphanumeric->filter($input);