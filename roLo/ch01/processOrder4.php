<?php

$tireQty = $_POST['tireQty'];
$oilQty = $_POST['oilQty'];
$sparkQty = $_POST['sparkQty'];

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

        echo "<p>Order processed at ";
        echo date('H:i, jS F Y');
        echo "</p>";

        echo "<p>Your order is as follows: </p>";

        echo htmlspecialchars($tireQty) . ' tires<br />';
        echo htmlspecialchars($oilQty) . ' bottles of oil<br />';
        echo htmlspecialchars($sparkQty) . ' spark plugs<br />';

        $totalQty = 0;
        $totalQty = $tireQty + $oilQty + $sparkQty;
        echo "<p>Items ordered: " . $totalQty . "<br />";
        $totalAmount = 0.00;

        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

        $totalAmount = $tireQty * TIREPRICE
                        + $oilQty * OILPRICE
                        + $sparkQty * SPARKPRICE;

        echo "Subtotal: $" . number_format($totalAmount, 2) . "<br />";

        $taxRate = 0.10;
        $totalAmount = $totalAmount * (1 + $taxRate);
        echo "Total including tax: $" . number_format($totalAmount, 2) . "</p>";

    ?>
</body>
</html>
