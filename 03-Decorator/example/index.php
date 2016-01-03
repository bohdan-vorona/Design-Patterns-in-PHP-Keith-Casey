<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'html.php';
include_once 'json.php';

$book = new stdClass();
$book->title = "Patterns of Enterprise Application Architecture";
$book->author_first_name = "Martin";
$book->author_last_name = "Fowler";

echo '<h1>HTML Decorator</h1>';

$htmlDecorator = new HTMLDecorator($book);
$htmlDecorator->render();

echo '<h1>JSON Decorator</h1>';

$jsonDecorator = new JSONDecorator($book);
$jsonDecorator->render();