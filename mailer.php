<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérez les données du formulaire
    $nom = isset($_POST['name']) ? $_POST['name'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Vérifiez que toutes les données sont présentes
    if (!empty($nom) && !empty($prenom) && !empty($message) && !empty($email)) {
        $mail = new PHPMailer(true);

        try {
            // Paramètres du serveur
            $mail->SMTPDebug = 0; // Activer la sortie de débogage détaillée
            $mail->isSMTP(); // Définir le mailer pour utiliser SMTP
            $mail->Host = 'smtp.gmail.com'; // Spécifier les serveurs SMTP principaux et de secours
            $mail->SMTPAuth = true; // Activer l'authentification SMTP
            $mail->Username = 'oceanebettaffard@gmail.com'; // Nom d'utilisateur SMTP
            $mail->Password = 'dljg ynve shls desv'; // Mot de passe SMTP
            $mail->SMTPSecure = 'tls'; // Activer le chiffrement TLS, `ssl` également accepté
            $mail->Port = 587; // Port TCP pour se connecter

            // Destinataires
            $mail->setFrom('oceanebettaffard@gmail.com', 'Oceane');
            $mail->addAddress('oceanebettaffard@gmail.com', 'Oceane user');

            // Contenu de l'e-mail
            $mail->isHTML(true); // Définir le format de l'e-mail en HTML
            $mail->Subject = 'Nouveau message du formulaire';
            $mail->Body = 'Nom: ' . htmlspecialchars($nom) . '<br>' .
                          'Prénom: ' . htmlspecialchars($prenom) . '<br>' .
                          'E-mail: ' . htmlspecialchars($email) . '<br>' .
                          'Message: ' . htmlspecialchars($message);
            $mail->AltBody = 'Nom: ' . $nom . "\n" .
                             'Prénom: ' . $prenom . "\n" .
                             'E-mail: ' . $email . "\n" .
                             'Message: ' . $message;

            $mail->send();
            echo 'Votre message a bien été envoyé!';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Veuillez remplir tous les champs.';
    }
} else {
    echo 'Le formulaire n\'a pas été soumis correctement.';
}
?>