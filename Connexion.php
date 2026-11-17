<?php include "inc/infos.php"; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <?php include "inc/menu.php"; ?>
        
        <form action="verifier.php" method="post">
            <p>
                <label for="identifiant">Identifiant</label><br>
                <input type="text" id="identifiant" name="identifiant" required>
            </p>
            <p>
                <label for="motdepasse">Mot de passe</label><br>
                <input type="password" id="motdepasse" name="motdepasse" required>
            </p>
            <p>
                <button type="submit">Se connecter</button>
            </p>
        </form>
        <p><a href="index.html">Revenir à la page d'accueil</a></p>
















        <?php include "inc/pied.php"; ?>
    </body>
</html>