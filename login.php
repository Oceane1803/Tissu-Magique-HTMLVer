<?php
// Activer l'affichage des erreurs pour le développement
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Connexion à la base de données
try {
    // Remplacer les informations de connexion par celles appropriées
    $pdo = new PDO('mysql:host=localhost;dbname=u132254256_tissumagique', 'u132254256_user', 'Decembre2004!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie !"; // Décommenter pour tester la connexion
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit;  // Terminer l'exécution en cas d'erreur de connexion
}

// Traitement du formulaire POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérifier si les données sont envoyées
    var_dump($_POST);  // Debugging: Affiche les données reçues par POST

    $username = $_POST['username'] ?? '';  // Utilise null coalescing pour éviter les erreurs si les champs sont vides
    $password = $_POST['password'] ?? '';

    // Vérification que les champs sont remplis
    if (empty($username) || empty($password)) {
        echo "Nom d'utilisateur et mot de passe sont obligatoires.";
    } else {
        // Préparer la requête SQL pour chercher l'utilisateur par nom d'utilisateur
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(); // Récupère l'utilisateur

        if ($user && password_verify($password, $user['password'])) {
            // Si les informations sont correctes, on crée les sessions
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header('Location: dashboard.php');  // Redirection vers le tableau de bord
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion à l'administration</h2>

    <!-- Formulaire de connexion -->
    <form method="POST">
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
