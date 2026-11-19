<?php
session_start();

// Seul l'administrateur peut créer un compte : la page se protège elle-même
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit;
}
if ($_SESSION["role"] != "admin") {
    header("Location: espace.php");
    exit;
}

include "inc/infos.php";
require "inc/bdd.php";

// 1. Récupérer ce que l'administrateur a tapé : $_POST["..."] reprend le name du champ
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$service = $_POST["service"];
$identifiant = $_POST["identifiant"];
$motdepasse = $_POST["motdepasse"];
$role = $_POST["role"];

// 2. Cet identifiant est-il déjà pris ?
$requete = $pdo->prepare("SELECT id FROM utilisateurs WHERE identifiant = ?");
$requete->execute([$identifiant]);
$existant = $requete->fetch();

// 3. S'il est libre : on range le compte, avec l'empreinte du mot de passe, et on revient à la liste
if (!$existant) {
    $empreinte = password_hash($motdepasse, PASSWORD_DEFAULT);
    $requete = $pdo->prepare("INSERT INTO utilisateurs (identifiant, mot_de_passe, prenom, nom, service, role) VALUES (?, ?, ?, ?, ?, ?)");
    $requete->execute([$identifiant, $empreinte, $prenom, $nom, $service, $role]);
    header("Location: utilisateurs.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TechSolutions : ajouter un compte</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include "inc/menu.php"; ?>

    <h1>Ajouter un compte</h1>
    <p class="erreur">Cet identifiant est déjà utilisé : le compte n'a pas été créé.</p>
    <p><a href="ajouter.php">Recommencer</a></p>

    <?php include "inc/pied.php"; ?>
  </body>
</html>