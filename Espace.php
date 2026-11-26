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
    <link rel="icon" type="images/TechSolutions.png" href="Images/TechSolutions.png">
  </head>
  <body>
    <?php include "inc/menu.php"; ?>

    <h1>Mon espace</h1>
    <h2 class="slogan">Bonjour <?php echo $_SESSION["prenom"] . " " . $_SESSION["nom"]; ?> !</h2>

    <p>Service : <?php echo $_SESSION["service"]; ?></p>
    <p>Rôle : <?php echo $_SESSION["role"]; ?></p>
    <?php if ($_SESSION["role"] == "admin") { ?>
      <a href="utilisateurs.php" class="buttonconnect">Gérer les utilisateurs</a>
    <?php } ?>
    <?php include "inc/pied.php"; ?>
  </body>
</html>