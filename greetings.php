<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <title>La mia prima pagina PHP</title>
  </head>
  <body>

  <?php
    $today = new DateTime("now", new DateTimeZone("Europe/Rome"));
    $h = (int)$today->format("G");

    $n = "Paolo";

    if ($h >= 8 && $h < 12) {
      $greet = "Buongiorno";
    } elseif ($h >= 12 && $h < 20) {
      $greet = "Buonasera";
    } else {
      $greet = "Buonanotte";
    }

    $userAgent = $_SERVER["HTTP_USER_AGENT"];
    $browser = "non riconosciuto";

    if (strpos($userAgent, "Edg/") !== false) {
      $browser = "Microsoft Edge";
    } elseif (strpos($userAgent, "OPR/") !== false) {
      $browser = "Opera";
    } elseif (strpos($userAgent, "SamsungBrowser/") !== false) {
      $browser = "Samsung Internet";
    } elseif (strpos($userAgent, "Firefox/") !== false) {
      $browser = "Mozilla Firefox";
    } elseif (strpos($userAgent, "Chrome/") !== false) {
      $browser = "Google Chrome";
    } elseif (strpos($userAgent, "Safari/") !== false) {
      $browser = "Safari";
    }
  ?>

  <p><?php echo $greet . " " . $n; ?>, benvenuta nella mia prima pagina PHP</p>

  <?php
    if ($browser == "non riconosciuto") {
      echo "<p>Ma che cazzo di browser stai usando bro...</p>";
    } else {
      echo "<p>Stai usando il browser " . $browser . "</p>";
    }
  ?>

  </body>
</html>
