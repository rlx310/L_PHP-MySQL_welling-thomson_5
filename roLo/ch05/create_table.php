<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
    <style type="text/css">
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
        }
    </style>
</head>
<body>
    <?php

        function create_table($data) {
            echo '<table>';
            for ($i = 0; $i < count($data); $i++) {
                echo "<tr><td>$data[$i]</td></tr>\n";
            }
            echo '</table>';
        }

        $my_data = ['First piece of data', 'Second piece of data', 'And the third'];
        create_table($my_data);

    ?>
</body>
</html>
