<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    echo "<p>$document_root</p>";
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

        @$fp = fopen("$document_root/roLo/ch02/orders.txt", 'rb');
        flock($fp, LOCK_SH);

        if (!$fp) {
            echo "<p><strong>No orders pending.<br />Please try again later.</strong></p>";
            exit;
        }

        while (!feof($fp)) {
            $order = fgets($fp);
            echo htmlspecialchars($order) . "<br />";
        }

        flock($fp, LOCK_UN);
        fclose($fp);

    ?>
</body>
</html>
