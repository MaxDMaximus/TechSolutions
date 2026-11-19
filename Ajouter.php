<?php
session_start();

// Page réservée à l'administrateur
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit;
}
if ($_SESSION["role"] != "admin") {
    header("Location: espace.php");
    exit;
}

include "inc/infos.php";
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
    <p class="slogan">Un nouveau salarié rejoint l'entreprise</p>

    <form class="formulaire" action="creer.php" method="post">
      <p>
        <label for="prenom">Prénom</label><br>
        <input type="text" id="prenom" name="prenom" required>
      </p>
      <p>
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" required>
      </p>
      <p>
        <label for="service">Service</label><br>
        <input type="text" id="service" name="service" required>
      </p>
      <p>
        <label for="identifiant">Identifiant</label><br>
        <input type="text" id="identifiant" name="identifiant" required>
      </p>
      <p>
        <label for="motdepasse">Mot de passe de départ</label><br>
        <input type="password" id="motdepasse" name="motdepasse" required>
      </p>
      <p>
        <label for="role">Rôle</label><br>
        <select id="role" name="role">
          <option value="salarie">Salarié</option>
          <option value="admin">Administrateur</option>
        </select>
      </p>
      <p>
        <button type="submit">Créer le compte</button>
      </p>
    </form>

    <p><a href="utilisateurs.php">Retour à la liste des comptes</a></p>

    <?php include "inc/pied.php"; ?>
  </body>
</html>