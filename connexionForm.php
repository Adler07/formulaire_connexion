<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <nav>
        <h1>GSB</h1>
        <p></p>
    </nav>
    <form action="connexion.php" method="post">
        <label>Email:</label>
        <input type="text" name="email">
        <label>Mot de passe:</label>
        <input type="password" name="mdp">
        <input type="submit" name="confirmer" value="Se connecter">
    </form>
    <?php
     if (isset($_SESSION["name"])) {
        header("Location:dashboard.php");}
    ?>
</body>
</html>