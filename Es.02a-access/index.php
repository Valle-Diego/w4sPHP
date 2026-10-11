<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES02 A - Accesso a pagina riservata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-card">
        <a class="back-link" href="../index.html">← Torna al PHP Lab</a>
        <p class="eyebrow">ES02 A · PHP Lab</p>
        <h1>Accesso a pagina riservata</h1>
        <form class="login-form" action="login.php" method="post">
            <p>
                <label for="username">Nome utente</label>
                <input type="text" id="username" name="username">
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </p>
            <input type="submit" value="Accedi">
        </form>
    </main>
</body>
</html>
