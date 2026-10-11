<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica accesso</title>
</head>
<body>
    <h1>Verifica accesso</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "123") {
            echo "<h2>Benvenuto $username</h2>";
            echo "<p>Nell'area riservata del sito!</p>";
        } else {
            echo "<h2>Accesso negato</h2>";
            echo "<p>Nome utente o password sbagliati.</p>";
        }
    }
    ?>
    <p><a href="index.php">Torna al login</a></p>
</body>
</html>
