<?php 
session_start(); 

$host = 'localhost';
$dbname = 'gsb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $email = $_POST["email"];
    $password = $_POST["mdp"];

    $stmt = $pdo->prepare("SELECT * FROM identifiants WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user) {
        if ($user['pass'] === $password) { 
            // Créé les variables de sessions 
            $_SESSION["name"] = $user["nom"]; 
            $_SESSION["surname"] = $user["prenom"]; 
            $_SESSION["role"] = $user["role_compte"]; 

    
           header("Location: dashboard.php");
           exit;
        }
    }
    echo "Email ou mot de passe incorrect";
} 