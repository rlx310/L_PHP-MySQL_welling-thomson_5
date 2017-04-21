<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Customer Orders</title>
    <style type="text/css">
        table, th, td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 6px;
        }
        th {
            background: #ccccff;
        }
        td {
            text-align: right;
        }
        td:last-child {
            text-align: inherit;
        }
    </style>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2>
    <?php

        $orders = file("$document_root/roLo/ch03/orders.txt");

        $number_of_orders = count($orders);

        if ($number_of_orders == 0) {
            echo "<p><strong>No orders pending.<br />Please try again later.</strong></p>";
        }

        echo "<table>\n";
        echo "<tr>
                <th>Order Date</th>
                <th>Tires</th>
                <th>Oil</th>
                <th>Spark Plugs</th>
                <th>Total</th>
                <th>Address</th>
              </tr>";

        for ($i = 0; $i < $number_of_orders; $i++) {

            $line = explode("\t", $orders[$i]);

            $line[1] = intval($line[1]);
            $line[2] = intval($line[2]);
            $line[3] = intval($line[3]);

            echo
                "<tr>
                    <td>" . $line[0] . "</td>
                    <td>" . $line[1] . "</td>
                    <td>" . $line[2] . "</td>
                    <td>" . $line[3] . "</td>
                    <td>" . $line[4] . "</td>
                    <td>" . $line[5] . "</td>
                </tr>";
        }
        echo "</table>";

    ?>
</body>
</html>
