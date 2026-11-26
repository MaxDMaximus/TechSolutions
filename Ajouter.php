<?php

require "inc/verif-admin.php";
include "inc/infos.php";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TechSolutions : ajouter un compte</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/TechSolutions.png" href="Images/TechSolutions.png">

  </head>
  <body>
    <?php include "inc/menu.php"; ?>

    <h1>Ajouter un compte</h1>
    <h2 class="slogan">Un nouveau salarié rejoint l'entreprise</h2>

    <form class="formulaire" action="creer.php" method="post">
      <p>
        <label style="margin-left: 20px;" for="prenom">Prénom</label><br>
        <input class="champconnexion" type="text" id="prenom" name="prenom" required>
      </p>
      <p>
        <label style="margin-left: 20px;" for="nom">Nom</label><br>
        <input class="champconnexion" type="text" id="nom" name="nom" required>
      </p>
      <p>
        <label style="margin-left: 20px;" for="service">Service</label><br>
        <input class="champconnexion" type="text" id="service" name="service" required>
      </p>
      <p>
        <label style="margin-left: 20px;" for="identifiant">Identifiant</label><br>
        <input class="champconnexion" type="text" id="identifiant" name="identifiant" required>
      </p>
      <p>
        <label style="margin-left: 20px;" for="motdepasse">Mot de passe de départ</label><br>
        <input class="champconnexion" type="password" id="motdepasse" name="motdepasse" required>
      </p>
      <p>
        <label style="margin-left: 20px;" for="role">Rôle</label><br>
        <select style="margin-left: 20px;" id="role" name="role">
          <option value="salarie">Salarié</option>
          <option value="admin">Administrateur</option>
        </select>
      </p>
      <p>
        <button style="margin-left: 20px;" type="submit">Créer le compte</button>
      </p>
    </form>

    <p><a href="utilisateurs.php">Retour à la liste des comptes</a></p>

    <?php include "inc/pied.php"; ?>
  </body>
</html>