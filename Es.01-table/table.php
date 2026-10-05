<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es.01 - Tabella | PHP Lab</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main class="page-card">
    <a class="back-link" href="../index.html">← Torna al PHP Lab</a>
    <p class="eyebrow">Es.01 · PHP Lab</p>
    <h1>Tabella pitagorica</h1>
    <p class="intro">Tabella delle moltiplicazioni da 1 a 10, generata con PHP.</p>
<!--table Border-->
    <table border="1">
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
    </main>
  </body>
</html>
