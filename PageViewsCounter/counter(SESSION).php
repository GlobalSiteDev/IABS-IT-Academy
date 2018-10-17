<?php
/*
* Write a page view counter using sessions, which multiplieS all views by 8
*/
session_start();
$counter = empty($_SESSION['counter']) ? 0 : $_SESSION['counter'];
if ($counter == 0) 
	$counter++;
else
	$counter *= 8;
$_SESSION['counter'] = $counter;
echo "The page was visited {$counter} times.";
