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

    <?php if ($utilisateur && password_verify($motdepasse, $utilisateur["mot_de_passe"])) { ?>
      <p class="slogan">Bienvenue <?php echo $utilisateur["prenom"] . " " . $utilisateur["nom"]; ?> !</p>
      <p>Vous êtes connecté au service <?php echo $utilisateur["service"]; ?>.</p>
    <?php } else { ?>
      <strong class="erreur">Identifiant ou mot de passe incorrect.</strong>
      <p><a href="connexion.php">Réessayer</a></p>
    <?php } ?>

    <?php include "inc/pied.php"; ?>
  </body>
</html>