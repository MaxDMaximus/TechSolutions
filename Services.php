<?php include "inc/infos.php"; ?>
<?php
include "inc/infos.php";

// Les tarifs hors taxes et le taux de TVA, écrits une seule fois
$essentiel = 60;
$serenite = 150;
$premium = 290;
$tva = 20;
?>
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
        <table>
            <tr>
                <td>Essentiel</td>
                <td>Intervention à la demande, prix de l'heure</td>
                <td><?php echo $essentiel; ?> euros</td>
                <td><?php echo $essentiel * (100 + $tva) / 100; ?> euros</td>
            </tr>
            <tr>
                <td>Sérénité</td>
                <td>Maintenance et sauvegarde, prix par mois</td>
                <td><?php echo $serenite; ?> euros</td>
                <td><?php echo $serenite * (100 + $tva) / 100; ?> euros</td>
            </tr>
            <tr>
                <td>Premium</td>
                <td>Tout compris, assistance illimitée, prix par mois</td>
                <td><?php echo $premium; ?> euros</td>
                <td><?php echo $premium * (100 + $tva) / 100; ?> euros</td>
            </tr>
        </table>
        <p>TVA au taux de 20%</p>


        <?php include "inc/pied.php"; ?>
    </body>
</html>    