<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Es.01c - Triangle | PHP Lab</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <main class="page-card">
        <a class="back-link" href="../">← Torna al PHP Lab</a>
        <p class="eyebrow">Es.03 · PHP Lab</p>
        <h1>Triangoli di asterischi</h1>
        <p class="intro">Quattro forme costruite con cicli PHP.</p>
        <div class="triangle-output"><?php
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
        ?></div>
        </main>

    </body>
</html>
