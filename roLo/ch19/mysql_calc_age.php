<?php

$day = 18;
$month = 9;
$year = 1972;

$bdayISO = date("c", mktime (0, 0, 0, $month, $day, $year));

$db = mysqli_connect('local', 'user', 'pass');
$res = mysqli_query($db, "select datediff(now(), '$bdayISO')");
$age = mysqli_fetch_array($res);

echo 'Current age is ' . floor($age[0] / 365.25) . '.';
