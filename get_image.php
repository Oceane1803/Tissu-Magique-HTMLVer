<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=$host;dbname=$BD", $user, $pwd);

// Récupérez l'ID de l'image depuis l'URL
$id = $_GET['id'];

// Requête pour obtenir l'image
$stmt = $pdo->prepare("SELECT Image, image_type FROM articles WHERE Reference = ?");
$stmt->execute([$id]);
$image = $stmt->fetch(PDO::FETCH_ASSOC);

if ($image) {
    // Définissez le type de contenu
    header("Content-Type: " . $image['image_type']);
    // Affichez l'image
    echo $image['Image'];
} else {
    // Gérez le cas où l'image n'est pas trouvée
    header("HTTP/1.0 404 Not Found");
}