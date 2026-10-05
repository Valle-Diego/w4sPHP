<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Esempio ciclo for</title>
  </head>
  <body>
    <h1>Generazione dinamica di una tabella html</h1>

    <table border="1">
      <?php
        for ($i = 1; $i <= 10; $i++) {
    	  echo "<tr>";
	  for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
    	  }
	  echo "</tr>";
	}
      ?>
    </table>
  </body>
</html>
