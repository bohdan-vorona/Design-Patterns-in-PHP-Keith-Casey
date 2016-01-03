<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'decorator.php';

$object = new Decorator();
$object->sentence = "This is a sample sentence that we're going to manipulate in the Decorator.";

// This should output: this is a sample sentence that we're going to manipulate in the decorator.
echo $object->lower();

// This should output: THIS IS A SAMPLE SENTENCE THAT WE'RE GOING TO MANIPULATE IN THE DECORATOR.
echo $object->uppercase();