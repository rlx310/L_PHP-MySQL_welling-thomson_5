<?php

    $pictures = array('img/brakes.png', 'img/headlight.png', 'img/spark_plug.png',
                        'img/steering_wheel.png', 'img/tire.png', 'img/wiper_blade.png');
    shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <div>
        <table>
            <tr>
                <?php

                    for ($i = 0; $i < 3; $i++) {
                        echo '<td><img src="';
                        echo $pictures[$i];
                        echo '"></td>';
                    }

                ?>
            </tr>
        </table>
    </div>
</body>
</html>
