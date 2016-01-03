<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

/**
 * Class PrettyPrint
 *
 * This is a decorator class that takes our object from before and outputs the data in various pre-defined formats.
 */
class PrettyPrint
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book = $book_object;
    }

    public function getAuthor()
    {
        return $this->book->author_first_name . " " . $this->book->author_last_name;
    }

    public function getAuthorSortable()
    {
        return $this->book->author_last_name . ", " . $this->book->author_first_name;
    }
}

$book = new stdClass();
$book->title = "Patterns of Enterprise Application Architecture";
$book->author_first_name = "Martin";
$book->author_last_name = "Fowler";

/**
 * By wrapping our object in a decorator, we can get our data in the specified formats *and* we only have one place to
 *  update when the business rules change.
 */
$bookFormatter = new PrettyPrint($book);
echo $book->title . " is a book written by " . $bookFormatter->getAuthor() . "\n";

echo "But you will find the book under " . $bookFormatter->getAuthorSortable() . "\n";