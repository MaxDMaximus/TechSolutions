<?php include "inc/infos.php"; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="icon" type="images/TechSolutions.png" href="Images/TechSolutions.png">
    </head>

    <body>
        <?php include "inc/menu.php"; ?>

        <h2 class="slogan">Une question ? Appelez-nous</h2>
        <h1>Nos coordonnées</h1>
        <p><strong>Téléphone :</strong> <?php echo $telephone; ?></p>
        <p><strong>Adresse :</strong> <?php echo $adresse; ?></p>
        <h2>Nos horaires</h2>
        <table>
            <tr>
                <th class="entete">Jours</th>
                <th class="entete">Horaires</th>
            </tr>
            <tr style="width=40px">
                <td>Du lundi au vendredi</td>
                <td>8h30 - 18h</td>
            </tr>
            <tr>
                <td>Samedi</td>
                <td>9h - 12h</td>
            </tr>
        </table>
















        <?php include "inc/pied.php"; ?>
    </body>
</html>    
