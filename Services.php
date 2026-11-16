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
        <h1>Nos services</h1>
        <h2 class="slogan">Tout ce dont votre entreprise à besoin</h2>
        <h2>Ce que nous faisons :</h2>
        <p>La maintenance des postes de travail. L'installation et le suivi des réseaux. La sauvegarde des données. L'assistance aux utilisateurs par téléphone.</p>
        <h2>Nos formules</h2>
        <table>
            <tr>
                <th>Essentiel</th>
                <td>Intervention à la demande, prix de l'heure</td>
                <td><?php echo $essentiel; ?> euros</td>
                <td><?php echo $essentiel * (100 + $tva) / 100; ?> euros</td>
            </tr>
            <tr>
                <th>Sérénité</th>
                <td>Maintenance et sauvegarde, prix par mois</td>
                <td><?php echo $serenite; ?> euros</td>
                <td><?php echo $serenite * (100 + $tva) / 100; ?> euros</td>
            </tr>
            <tr>
                <th>Premium</th>
                <td>Tout compris, assistance illimitée, prix par mois</td>
                <td><?php echo $premium; ?> euros</td>
                <td><?php echo $premium * (100 + $tva) / 100; ?> euros</td>
            </tr>
        </table>
        <p>TVA au taux de 20%</p>


        <?php include "inc/pied.php"; ?>
    </body>
</html>    