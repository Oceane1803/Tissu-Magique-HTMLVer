<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username_db = "u221411775_user";
$password_db = "/F2xK95wf7@c";
$dbname = "u221411775_dbtissumagique";

// Connexion à la base de données
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $username;

if (empty($username) || empty($email) || empty($password)) {
    die("Tous les champs sont obligatoires.");
}

// Hachage du mot de passe
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insertion des données dans la base de données
$sql = "INSERT INTO utilisateurs (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie ! <a href='connexion.html'>Connectez-vous ici</a>.";
} else {
    echo "Erreur lors de l'inscription : " . $conn->error;
}

$conn->close();
?>

