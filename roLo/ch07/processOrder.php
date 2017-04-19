<?php
require_once("fileExceptions.php");

$tireQty = (int) $_POST['tireQty'];
$oilQty = (int) $_POST['oilQty'];
$sparkQty = (int) $_POST['sparkQty'];
$address = preg_replace("/\t|\r/", ' ', $_POST['address']);
$documentRoot = $_SERVER["DOCUMENT_ROOT"];
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
    echo "<p>Order processed at " .$date."</p>";
    echo "<p>Your order is as follows</p>";

    $totalQty = 0;
    $totalAmount = 0.00;

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $totalQty = $tireQty + $oilQty + $sparkQty;
    echo "<p>Items ordered: ".$totalQty."<br />";

    if ($totalQty == 0) {
        echo "You did not order anything on the previous page!<br />";
    }
    else {
        if ($tireQty > 0) {
            echo htmlspecialchars($tireQty)." tires<br />";
        }
        if ($oilQty > 0) {
            echo htmlspecialchars($oilQty)." bottles of oil<br />";
        }
        if ($oilQty > 0) {
            echo htmlspecialchars($sparkQty)." spark plugs<br />";
        }
    }

    $totalAmount = $tireQty * TIREPRICE
                 + $oilQty * OILPRICE
                 + $sparkQty * SPARKPRICE;
    echo "Subtotal: $".number_format($totalAmount, 2)."<br />";

    $taxRate = 0.10;
    $totalAmount = $totalAmount * (1 + $taxRate);
    echo "Total including tax: $".number_format($totalAmount, 2)."</p>";

    $outputString = $date."\t".$tireQty." tires \t".$oilQty." oil\t"
                    .$sparkQty." spark plugs\t\$".$totalAmount."\t"
                    .$address."\n";

    try {
        if (!($fp = @fopen("$documentRoot/orders.txt", "ab"))) {
            throw new fileOpenException();
        }
        if (!flock($fp, LOCK_EX)) {
            throw new fileLockException();
        }
        if (!fwrite($fp, $outputString, strlen($outputString))) {
            throw new fileWriteException();
        }

        flock($fp, LOCK_UN);
        fclose($fp);
        echo "<p>Order written.</p>";
    }
    catch (fileOpenException $foe) {
        echo "<p><strong>Orders file could not be opened.<br /> Please contact webmaster for help.</strong></p>";
    }
    catch (Exception $e) {
        echo "<p><strong>Your order could not be processed at this time.<br /> Please try again later.</strong></p>";
    }

    ?>
</body>
</html>
