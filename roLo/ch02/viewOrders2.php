<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
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

    echo 'Final position of the file pointer is ' . (ftell($fp));
    echo '<br />';
    rewind($fp);
    echo 'After rewind, the position is ' . (ftell($fp));
    echo '<br />';

    fclose($fp);
?>
</body>
</html>
