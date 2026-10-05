<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Pitagoric Table</title>
  </head>
  <body>
    <h1>Generazione dinamica di una tabella html</h1>
//table Border
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
  </body>
</html>
