<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Freight Costs</title>
    <link rel="stylesheet" href="css/freight.css" type="text/css" />
</head>
<body>
    <table>
        <tr>
            <th>Distance</th>
            <th>Cost</th>
        </tr>
        <?php

        $distance = 50;
        while ($distance <= 250) {
            echo "<tr><td style=\"text-align: right;\">".$distance."</td>
                      <td style=\"text-align: right;\">".($distance / 10)."</td>
                  </tr>\n";
            $distance += 50;
        }

        ?>
    </table>
</body>
</html>
