<?php

require "inc/verif-admin.php";
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT id, prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>
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

    <h1>Gestions des comptes utilisateurs</h1>
    <h2 class="slogan">Les comptes du persosnnel</h2>
    <p>Nombre de compte : <?php echo count($utilisateurs); ?></p>
    <a href="ajouter.php" class="buttonconnect">Ajouter un compte</a>
    <table style="margin: 20px;">
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Service</th>
        <th>Rôle</th>
        <th>Action</th>
      </tr>
      <?php foreach ($utilisateurs as $u) { ?>
      <tr>
        <td><?php echo $u["prenom"]; ?></td>
        <td><?php echo $u["nom"]; ?></td>
        <td><?php echo $u["service"]; ?></td>
        <td><?php echo $u["role"]; ?></td>
         <td>
          <form action="supprimer.php" method="post">
            <input type="hidden" name="id" value="<?php echo $u["id"]; ?>">
            <button type="submit" class="bouton-supprimer">Supprimer</button>
          </form>
        </td>
      </tr>
      <?php } ?>
    </table>
    <a href="espace.php" class="buttonconnect">Retourner à mon espace</a>


        <?php include "inc/pied.php"; ?>
    </body>
</html>    