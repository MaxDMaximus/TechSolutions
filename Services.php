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
        <table  class="tableau">
            <tr  class="tableau">
                <td  class="tableau">Essentiel</td>
                <td  class="tableau">Intervention à la demande, prix de l'heure</td>
                <td  class="tableau"><?php echo $essentiel; ?> euros</td>
                <td  class="tableau"><?php echo $essentiel * (100 + $tva) / 100; ?> euros</td>
            </tr>
            <tr  class="tableau">
                <td  class="tableau">Sérénité</td>
                <td  class="tableau">Maintenance et sauvegarde, prix par mois</td>
                <td  class="tableau"><?php echo $serenite; ?> euros</td>
                <td  class="tableau"><?php echo $serenite * (100 + $tva) / 100; ?> euros</td>
            </tr>
            <tr  class="tableau">
                <td>Premium</td>
                <td  class="tableau">Tout compris, assistance illimitée, prix par mois</td>
                <td  class="tableau"><?php echo $premium; ?> euros</td>
                <td  class="tableau"><?php echo $premium * (100 + $tva) / 100; ?> euros</td>
            </tr>
        </table>
        <p>TVA au taux de 20%</p>


        <?php include "inc/pied.php"; ?>
    </body>
</html>    