<?php

    $tireQty = (int) $_POST['tireQty'];
    $oilQty = (int) $_POST['oilQty'];
    $sparkQty = (int) $_POST['sparkQty'];
    $address = preg_replace('/\t|\R/', ' ', $_POST['address']);
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    $date = date('H:i, jS F Y');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php

        echo "<p>Order processed at " . date('H:i, jS F Y') . "</p>";
        echo "<p>Your order is as follows: </p>'";

        $totalQty = 0;
        $totalAmount = 0.00;

        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

        $totalQty = $tireQty + $oilQty + $sparkQty;
        echo "<p>Items ordered: " . $totalQty . "<br />";

        if ($totalQty == 0) {
            echo "You did not order anything on the previous page!<br />";
        }
        else {
            if ($tireQty > 0) {
                echo htmlspecialchars($tireQty) . ' tires<br />';
            }
            if ($oilQty > 0) {
                echo htmlspecialchars($oilQty) . ' bottles of oil<br />';
            }
            if ($sparkQty > 0) {
                echo htmlspecialchars($sparkQty) . ' spark plugs<br />';
            }
        }

    ?>
</body>
</html>
