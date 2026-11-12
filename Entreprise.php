<?php include "inc/infos.php"; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <table class="tablenav">
            <?php include "inc/menu.php"; ?>
        </table>
        <h2 class="slogan">Une équipe à votre service depuis <?php echo $creation ; ?></h2>
        <h2>Soit <?php echo $age ; ?> ans d'expérience au service des entreprises de la région.</h2>
        <h2>Notre histoire</h2>
        <p>TechSolutions a été créée à Brive-la-Gaillarde par deux techniciens. Aujourd'hui, l'entreprise compte une trentaine de salariés et s'occupe de plus de cent clients.</p>
        <h2>Notre équipe</h2>
        <p>Martin Durand, responsable informatique. Julie Moreau, accueil et planning. Karim Benali, comptabilité.</p>
        



        <?php include "inc/pied.php"; ?>
    </body>
</html>    