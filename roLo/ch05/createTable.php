<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
    <link rel="stylesheet" href="css/createTable.css" />
</head>
<body>
    <?php
    function createTable($data) {
        echo '<table>';
        reset($data);
        $value = current($data);
        while ($value) {
            echo "<tr><td>$value</td></tr>";
            $value = next($data);
        }
        echo '</table>';
    }

    $myData = ['First piece of data', 'Second piece of data', 'And the third'];
    createTable($myData);
    ?>
</body>
</html>
