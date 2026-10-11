<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es.01a - Pitagoric Table | PHP Lab</title>
    <link rel="stylesheet" href="style.css?v=2">
  </head>
  <body>
    <main class="page-card">
      <a class="back-link" href="../index.html">← Torna al PHP Lab</a>
      <h1>Generazione dinamica di una tabella html</h1>
      <!--table Border-->
      <div class="table-scroll">
        <table>
          <?php
          //for Table builder
            for ($i = 1; $i <= 10; $i++) {
              echo "<tr>";
              for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
              }
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </main>
  </body>
</html>
