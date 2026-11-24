<?php
session_start();
include "inc/infos.php";
require "inc/bdd.php";

// 1. Récupérer ce que la personne a tapé dans le formulaire
$identifiant = $_POST["identifiant"];
$motdepasse = $_POST["motdepasse"];

// 2. Chercher dans la base le compte qui a cet identifiant
$requete = $pdo->prepare("SELECT * FROM utilisateurs WHERE identifiant = ?");
$requete->execute([$identifiant]);
$utilisateur = $requete->fetch();

// 3. Si le compte existe et que le mot de passe est le bon : on retient la personne et on l'envoie dans son espace
if ($utilisateur && password_verify($motdepasse, $utilisateur["mot_de_passe"])) {
    $_SESSION["id"] = $utilisateur["id"];
    $_SESSION["prenom"] = $utilisateur["prenom"];
    $_SESSION["nom"] = $utilisateur["nom"];
    $_SESSION["service"] = $utilisateur["service"];
    $_SESSION["role"] = $utilisateur["role"];
    header("Location: espace.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TechSolutions : espace salariés</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/TechSolutions.png" href="Images/TechSolutions.png">xa
  </head>
  <body>
    <?php include "inc/menu.php"; ?>

    <h1>Espace salariés</h1>
    <p class="erreur">Identifiant ou mot de passe incorrect.</p>
    <p><a href="connexion.php">Réessayer</a></p>

    <?php include "inc/pied.php"; ?>
  </body>
</html>