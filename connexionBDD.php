<?php
    $host = "localhost";
    $BD = "u132254256_tissumagique";
    $user = "u132254256_user";
    $pwd = "Decembre2004!";
    
    try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$BD", $user, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit;
}
?>