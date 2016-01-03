<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

$book = new stdClass();
$book->title = "Patterns of Enterprise Application Architecture";
$book->author_first_name = "Martin";
$book->author_last_name = "Fowler";

/**
 * We can print any of the properties we want, but we must call the individually. Even
 *  worse, if we need to display the author's name in numerous places, we have to do this
 *  over and over again. Which becomes incredibly painful once we have to change
 *  something. We'll have to find and update every instance. That's trouble.
 */

echo $book->title . " is a book written by " . $book->author_first_name . " " . $book->author_last_name . "\n";

echo "But you will find the book under " . $book->author_last_name . ", " . $book->author_first_name . "\n";