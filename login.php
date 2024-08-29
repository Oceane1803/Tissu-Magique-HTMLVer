<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $host = "localhost";
    $BD = "u221411775_dbtissumagique";
    $user = "u221411775_user";
    $pwd = "/F2xK95wf7@c";

// Connexion à la base de données
$conn = new mysqli($host, $user, $pwd, $BD);


// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Vérification des informations dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Connexion réussie
        $_SESSION['user_id'] = $row['id']; // Enregistrer l'ID utilisateur dans la session
        $_SESSION['username'] = $row['username'];
        header("Location: profil.php"); // Rediriger vers la page de profil
        exit;
    } else {
        // Mot de passe incorrect
        echo "Mot de passe incorrect. <a href='connexion.html'>Réessayer</a> ou <a href='register.php'>Créer un compte</a>.";
    }
} else {
    // Nom d'utilisateur non trouvé
    echo "Nom d'utilisateur non trouvé. <a href='register.php'>Créer un compte</a>";
}

$conn->close();
?>

