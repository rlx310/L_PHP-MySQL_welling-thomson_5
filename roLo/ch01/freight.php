<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Freight Costs</title>
    <link rel="stylesheet" href="freight.css" />
</head>
<body>
    <table>
        <tr>
            <td>Distance</td>
            <td>Cost</td>
        </tr>
        <?php
            $distance = 50;
            while ($distance <= 250) {
                echo "<tr>
                        <td>" . $distance . "</td>
                        <td>" . ($distance / 10) . "</td>
                      </tr>\n";
                $distance += 50;
            }
        ?>
    </table>
</body>
</html>
