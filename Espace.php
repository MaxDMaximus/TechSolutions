<?php
session_start();

require "inc/verif-connect.php";
include "inc/infos.php";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TechSolutions : mon espace</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include "inc/menu.php"; ?>

    <h1>Mon espace</h1>
    <p class="slogan">Bonjour <?php echo $_SESSION["prenom"] . " " . $_SESSION["nom"]; ?> !</p>

    <p>Service : <?php echo $_SESSION["service"]; ?></p>
    <p>Rôle : <?php echo $_SESSION["role"]; ?></p>
    <?php if ($_SESSION["role"] == "admin") { ?>
      <p><a href="utilisateurs.php">Gérer les utilisateurs</a></p>
    <?php } ?>
    <p><a href="deconnexion.php">Se déconnecter</a></p>
    <?php include "inc/pied.php"; ?>
  </body>
</html>