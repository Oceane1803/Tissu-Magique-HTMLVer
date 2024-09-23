<!DOCTYPE html>
<html lang="fr">
        <?php include 'header.php'; ?> 
<body>
        <?php include 'logo.php'; ?>

        <!-- Barre de navigation responsive -->
        <?php include 'navbar.html'; ?>
    <style>
        /* S'assure que le footer reste en bas de la page */
        html, body {
            height: 100%;
        }
    </style>

        <!-- Boutons pour Connexion et Inscription -->
        <div class="text-center mt-5">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">Se connecter</button>
            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#registerModal">S'inscrire</button>
        </div>
    </div>

    <!-- Modale de Connexion -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Nom d'utilisateur</label>
                            <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modale d'Inscription -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <label for="username">Nom d'utilisateur</label>
                            <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-success">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
        <?php include 'footer.html'; ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

