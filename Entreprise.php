<?php
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$equipe = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <?php include "inc/menu.php"; ?>

        <h2 class="slogan">Une équipe à votre service depuis <?php echo $creation ; ?></h2>
        <h2>Soit <?php echo $age ; ?> ans d'expérience au service des entreprises de la région.</h2>
        <h2>Notre histoire</h2>
        <p>TechSolutions a été créée à Brive-la-Gaillarde par deux techniciens. Aujourd'hui, l'entreprise compte une trentaine de salariés et s'occupe de plus de cent clients.</p>
        <h2>Notre équipe</h2>
        <ul>
            <?php foreach ($equipe as $equipe) { ?>
                <li>
                    <?= htmlspecialchars($equipe['prenom'] . ' ' . $equipe['nom']) ?>
                </li>
            <?php } ?>
        </ul>
        



        <?php include "inc/pied.php"; ?>
    </body>
</html>    