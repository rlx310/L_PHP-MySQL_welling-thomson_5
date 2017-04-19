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

    echo "<p>Your order is as follows:</p>";
    echo htmlspecialchars($tireQty) . ' tires <br />';
    echo htmlspecialchars($oilQty) . ' tires <br />';
    echo htmlspecialchars($sparkQty) . ' spark plugs<br />';
?>
</body>
</html>
