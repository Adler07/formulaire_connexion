<?php
 session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    if (isset($_SESSION["name"])) {
    $nom = $_SESSION['name'];
    $role = $_SESSION['role'];
    echo "Félicitations {$nom}! Vous êtes connecté en tant que {$role}";
    }
    else {
        echo "Erreur : aucune informations liées à la session. Redirection vers le formulaire de connexion.";
        header("Refresh: 3; URL=connexionForm.php");
        exit;
    }
    ?>
    <form action="logout.php">
    <button>Se déconnecter</button>
    </form>
</body>
</html>