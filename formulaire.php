<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF - 8"/>
        <meta name="viewport" content="width=device-width">
        <link href="style.css" rel="stylesheet">
        <title>Ajouter une création</title>
    </head>
    <form id="formajout" action="BDD.php" method="post">
        <ul>
            <li>
                <label for="reference"> Référence </label><br>
                <input type="number" id="reference" name="reference"/>
            </li>
            <li>
                <label for="noma"> Nom de l'article </label><br>
                <input type="text" id="noma" name="noma"/>
            </li>
            <li>
                <label for="taille"> Taille </label><br>
                <input type="text" id="taille" name="taille"/>
            </li>
            <li>
                <label for="prix"> Prix </label><br>
                <input type="number" id="prix" name="prix"/>
            </li>
            <li>
                <label for="couleur"> Couleur </label><br>
                <input type="text" id="couleur" name="couleur"/>
            </li>
            <li>
                <label for="type"> Type </label><br>
                <input type="text" id="type" name="type"/>
            </li>
            <li>
                <label for="description"> Description </label><br>
                <textarea id="description" name="description"></textarea>
            </li>
            <li>
                <label for="image"> Image </label><br>
                <input type="file" id="image" name="image"/>
            </li>
        </ul>
        <div class="button">
            <button type="submit"> Ajouter </button>
        </div>
    </form>
</html>
