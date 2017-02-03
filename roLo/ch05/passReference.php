<?php

function increment1($value, $amount=1) {
    $value = $value + $amount;
}
$value1 = 10;
increment1($value1);
echo $value1;


echo '<br />';


function increment2(&$value, $amount=1) {
    $value = $value + $amount;
}
$value2 = 10;
increment2($value2);
echo $value2;

?>

