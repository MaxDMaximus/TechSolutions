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

        <h1>Espace salariés</h1>

        <h2 class="slogan">Connectez-vous avec vos identifiants</h2>
        
        <form class="formulaire" action="verifier.php" method="post">
            <p>
                <label style="margin-left: 20px;" for="identifiant">Identifiant</label><br>
                <input class="champconnexion" type="text" id="identifiant" name="identifiant" required>
            </p>
            <p>
                <label style="margin-left: 20px;" for="motdepasse">Mot de passe</label><br>
                <input class="champconnexion" type="password" id="motdepasse" name="motdepasse" required>
            </p>
            <p>
                <button class="buttonconnect" type="submit">Se connecter</button>
            </p>
        </form>
        <p><a href="index.php">Revenir à la page d'accueil</a></p>
















        <?php include "inc/pied.php"; ?>
    </body>
</html>