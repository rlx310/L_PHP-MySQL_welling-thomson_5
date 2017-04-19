<?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Customer Orders</title>
    <link rel="stylesheet" href="css/viewOrders2.css"/>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2>

    <?php

    $orders = file("$documentRoot/orders.txt");

    $numberOfOrders = count($orders);
    if ($numberOfOrders == 0) {
        echo '<p><strong>No orders pending.<br />Please try again later.</strong></p>';
    }

    echo "<table>\n";
    echo '<tr>
            <th>Order Date</th>
            <th>Tires</th>
            <th>Oil</th>
            <th>Spark Plugs</th>
            <th>Total</th>
            <th>Address</th>
         <tr>';

    for ($i = 0; $i < $numberOfOrders; $i++) {
        $line = explode("\t", $orders[$i]);

        $line[1] = intval($line[1]);
        $line[2] = intval($line[2]);
        $line[3] = intval($line[3]);

        echo '<tr>
                <td>'.$line[0].'</td>
                <td>'.$line[1].'</td>
                <td>'.$line[2].'</td>
                <td>'.$line[3].'</td>
                <td>'.$line[4].'</td>
                <td>'.$line[5].'</td>
              </tr>';
    }
    echo '</table>';
    ?>

</body>
</html>
