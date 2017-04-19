<?php

$day = 18;
$month = 9;
$year = 1972;

$bdayUnix = mktime(0, 0, 0, $month, $day, $year);
$nowUnix = time();
$ageUnix = $nowUnix - $bdayUnix;
$age = floor($ageUnix / (365 * 24 * 60 * 60));

echo 'Current age is ' . $age . '.';
?>
