<?php

$prices['Tires'] = 100;
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;

echo '<p>while</p>';

while ($element = each($prices)) {
    echo $element['key'].' – '.$element['value'];
    echo '<br />';
}


echo '<br />';
echo '<p>foreach</p>';

foreach ($prices as $key => $value) {
    echo $key.' – '.$value;
    echo '<br />';
}


$products = ['Tires', 'Oil', 'Spark Plugs'];

echo '<br />';
echo '<p>for i</p>';

for ($i = 0; $i < count($products); $i++) {
    echo $products[$i];
    echo '<br />';
}


$products = array(
    array('TIR', 'Tires', 100),
    array('OIL', 'Oil', 10),
    array('SPK', 'Spark Plugs', 4)
);

echo '<br />';
echo '<p>2D array</p>';

for ($row = 0; $row < count($products); $row++) {
    for ($column = 0; $column < count($products[$row]); $column++) {
        echo '|'.$products[$row][$column];
    }
    echo '|<br />';
}


$products = array(
    array('Code' => 'TIR',
          'Description' => 'Tires',
          'Price' => 100
    ),
    array('Code' => 'OIL',
          'Description' => 'Oil',
          'Price' => 10
    ),
    array('Code' => 'SPK',
          'Description' => 'Spark Plugs',
          'Price' => 4
    )
);


echo '<br />';
echo '<p>2D map for</p>';

for ($row = 0; $row < count($products); $row++) {
    echo '|'.$products[$row]['Code'].'|'.$products[$row]['Description'].'|'.$products[$row]['Price'].'|<br />';
}


echo '<br />';
echo '<p>2D map for-while</p>';

for ($row = 0; $row < count($products); $row++) {
    while (list($key, $value) = each($products[$row])) {
        echo '|'.$value;
    }
    echo '|<br />';
}


$categories = array(
    array(
        array('CAR_TIR', 'Tires', 100),
        array('CAR_OIL', 'Oil', 10),
        array('CAR_SPK', 'Spark Plugs', 4)
    ),
    array(
        array('VAN_TIR', 'Tires', 120),
        array('VAN_OIL', 'Oil', 12),
        array('VAN_SPK', 'Spark Plugs', 5)
    ),
    array(
        array('TRK_TIR', 'Tires', 150),
        array('TRK_OIL', 'Oil', 15),
        array('TRK_SPK', 'Spark Plugs', 6)
    )
);

echo '<br />';
echo '<p>3D map for</p>';

for ($layer = 0; $layer < count($categories); $layer++) {
    echo 'Layer '.$layer.'<br />';
    for ($row = 0; $row < count($categories[$layer]); $row++) {
        for ($column = 0; $column < count($categories[$layer][$row]); $column++) {
            echo '|'.$categories[$layer][$row][$column];
        }
        echo '|<br />';
    }
}

$a = '2';           // $a is '2'
$b = &$a;           // $a is '2'   | $b is '2'
$b = '3$b';         // $a is '3$b' | $b is '3$b'
echo $a.', '.$b;    // '3$b, 3$b'

?>

