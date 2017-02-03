<?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Customer Orders</title>
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

    for ($i = 0; $i < $numberOfOrders; $i++) {
        echo $orders[$i].'<br />';
    }
    print_r($orders);
    ?>

</body>
</html>
