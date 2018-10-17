<?php
/*
* Write a page view counter using cookies, which multiplieS all views by 3
*/
$counter = empty($_COOKIE['counter']) ? 0 : $_COOKIE['counter'];
if ($counter == 0) 
	$counter++;
else
	$counter *= 3;
setcookie('counter', $counter, time() + 60 * 60, "/");
echo "The page was visited {$counter} times.";
