<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
    <link rel="stylesheet" href="css/createTable.css" />
</head>
<body>
    <?php
    function createTable($data, $header=NULL, $caption=NULL) {
        echo '<table>';
        if ($caption) {
            echo "<caption>$caption</caption>";
        }
        if ($header) {
            echo "<tr><th>$header</th></tr>";
        }
        reset($data);
        $value = current($data);
        while ($value) {
            echo "<tr><td>$value</td></tr>\n";
            $value = next($data);
        }
        echo '</table>';
    }

    $myData = ['First piece of data', 'Second piece of data', 'And the third'];
    $myHeader = 'Data';
    $myCaption = 'Data about something';
    createTable($myData, $myHeader, $myCaption);
    ?>
</body>
</html>
