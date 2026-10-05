<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Triangles</title>
        <style>
            body {font-family: monospace;}
        </style>
    </head>
    <body>

        <?php
            echo "(a)<br>";

            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo '*';
                }
                echo '<br>';
            }

            echo '<br>(b)<br>';

            for ($i = 10; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo '*';
                }
            echo '<br>';
            }

            echo '<br>(c)<br>';

            for ($i = 10; $i >= 1; $i--) {
                for ($j = 1; $j <= 10 - $i; $j++) {
                    echo '&nbsp;';
                }
                for ($j = 1; $j <= $i; $j++) {
                    echo '*';
                }
                echo '<br>';
            }

            echo '<br>(d)<br>';

            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 10 - $i; $j++) {
                    echo '&nbsp;';
                }
                for ($j = 1; $j <= $i; $j++) {
                    echo '*';
                }
                echo '<br>';
            }
        ?>

    </body>
</html>