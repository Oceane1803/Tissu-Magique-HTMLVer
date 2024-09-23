<!DOCTYPE html>
<html lang="fr">
<?php include 'header.php'; ?> 
<body>
    <div class="container fondContainer">
        <header class="row">
            <div class="col-md-2 d-none d-md-block">
                <img src="logo.png">
            </div>
        </header>
        
         <!-- Barre de navigation responsive -->
        <?php include 'navbar.html'; ?>
        
        <div class="containerA">
            <h1>Nous contacter:</h1>

            <form action="mailer.php" method="POST">
                <label for="name">Nom:</label>
                    <input type="text" name="name" id="name" required><br>
                <label for="prenom">Prénom:</label>
                    <input type="text" name="prenom" id="prenom" required><br>
                <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required><br>
                <label for="message">Message:</label>
                    <textarea name="message" id="message" required></textarea><br>
                <div class="form-buttons">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
        <!-- Footer -->
        <?php include 'footer.html'; ?>
</body>
</html>