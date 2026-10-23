<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es.2a - Verifica accesso | PHP Lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-card">
        <a class="back-link" href="../">← Torna al PHP Lab</a>
        <p class="eyebrow">Es.02a · PHP Lab</p>
        <h1>Verifica accesso</h1>
        <section class="access-result <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if ($username == "admin" && $password == "123") {
                    echo "success\">";
                    echo "<h2>Benvenuto $username</h2>";
                    echo "<p>Nell'area riservata del sito!</p>";
                } else {
                    echo "error\">";
                    echo "<h2>Accesso negato</h2>";
                    echo "<p>Nome utente o password sbagliati.</p>";
                }
            }
        ?></section>
        <p><a class="back-link" href="index.php">Torna al login</a></p>
    </main>
</body>
</html>
