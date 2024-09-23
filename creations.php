<!DOCTYPE html>
<html lang="fr">
<?php include 'header.php'; ?> 
<body>
    <?php
        include "connexionBDD.php";

        try {
            $ajout = new PDO("mysql:host=$host;dbname=$BD", $user, $pwd);
            $ajout->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Récupérer les données de la table creations
            $query = $ajout->prepare("SELECT * FROM Article");
            $query->execute();
            $articles = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo 'Echec : ' . $e->getMessage();
        }
    ?>
    <?php include "logo.php"; ?>

        <!-- Barre de navigation responsive -->
        <?php include 'navbar.html'; ?>

        <main class="col-md-12">
            <div class="container">
                <div id="Produits" class="contenu">
                    <h2>Retrouvez ici toutes nos créations en vente:</h2>
                </div>
                <div class="row">
                    <?php foreach ($articles as $article): ?>
                        <div class="col-md-3">
                            <div class="card" id="cardcrea">
                            <img src=<?php echo htmlspecialchars($article['Image']); ?> class="card-img-top" alt="Robe">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($article['NomA']); ?></h5>
                                    <p class="card-text">Taille: <?php echo htmlspecialchars($article['Taille']); ?> <br> Prix: <?php echo htmlspecialchars($article['PrixUnitaire']); ?>€</p>
                                    <p class="card-text">Détails: <?php echo htmlspecialchars($article['Description']); ?></p>
                                    <form action="#" method="GET">
                                        <input id="prodId" name="prodId" type="hidden" value=<?php echo htmlspecialchars($article['Reference']); ?>/>
                                    <!--<input type="submit" class="btn btn-primary" value="Voir">-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
    <!-- Footer -->
        <?php include 'footer.html'; ?>
</body>
</html>
