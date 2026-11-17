<?php
include "inc/infos.php";
require "inc/bdd.php";

// 1. Récupérer ce que la personne a tapé dans le formulaire
$identifiant = $_POST["identifiant"];
$motdepasse = $_POST["motdepasse"];

// 2. Chercher dans la base le compte qui a cet identifiant
$requete = $pdo->prepare("SELECT * FROM utilisateurs WHERE identifiant = ?");
$requete->execute([$identifiant]);
$utilisateur = $requete->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TechSolutions : espace salariés</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include "inc/menu.php"; ?>

    <h1>Espace salariés</h1>

    <?php if ($utilisateur) { ?>
      <p>Compte trouvé : <?php echo $utilisateur["prenom"] . " " . $utilisateur["nom"]; ?></p>
    <?php } else { ?>
      <p class="erreur">Aucun compte n'a cet identifiant.</p>
    <?php } ?>

    <?php include "inc/pied.php"; ?>
  </body>
</html>