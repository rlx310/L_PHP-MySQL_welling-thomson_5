<?php
    $pictures = array(
        'brakes.png', 'headlight.png', 'spark_plug.png',
        'steering_wheel.png', 'tire.png', 'wiper_blade.png'
    );

    shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts</title>
    <link rel="stylesheet" href="css/bobsFrontPage.css" />
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <div>
        <table>
            <tr>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo '<td>';
                    echo '<img src="img/';
                    echo $pictures[$i];
                    echo '"/></td>';
                }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>
