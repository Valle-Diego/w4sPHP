<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Greeting</title>
  </head>
  <body>

  <?php
  //Timezone and format
    $today = new DateTime("now", new DateTimeZone("Europe/Rome"));
    $h = (int)$today->format("G");
  //Username
    $n = "Paolo";
  //Greet based on time
    if ($h >= 8 && $h < 12) {
      $greet = "Buongiorno";
    } elseif ($h >= 12 && $h < 20) {
      $greet = "Buonasera";
    } else {
      $greet = "Buonanotte";
    }
  //Server detection
    $userAgent = $_SERVER["HTTP_USER_AGENT"];
    $browser = "non riconosciuto";
  //Browser selection
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
//Greet
  <p><?php echo $greet . " " . $n; ?>, benvenuto nella mia prima pagina PHP</p>
//Browser
  <?php
    if ($browser == "non riconosciuto") {
      echo "<p>Ma che cazzo di browser stai usando bro...</p>";
    } else {
      echo "<p>Stai usando il browser " . $browser . "</p>";
    }
  ?>

  </body>
</html>
