<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es.01b - Greetings | PHP Lab</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <main class="page-card">
  <a class="back-link" href="../">← Torna al PHP Lab</a>
  <p class="eyebrow">Es.02 · PHP Lab</p>
  <h1>Greetings</h1>
  <section class="greeting-result">
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
    $userAgent = $_SERVER["HTTP_USER_AGENT"] ?? "";
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
<!--Greet-->
  <p class="greeting"><?php echo $greet . " " . $n; ?>, benvenuto nella mia prima pagina PHP</p>
<!--Browser-->
  <?php
    if ($browser == "non riconosciuto") {
      echo "<p>Browser non riconosciuto.</p>";
    } else {
      echo "<p class=\"browser-info\">Stai usando il browser " . $browser . "</p>";
    }
  ?>
  </section>
  </main>

  </body>
</html>
