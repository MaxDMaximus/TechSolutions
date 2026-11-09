<?php
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom FROM utilisateurs");
$utilisateurs = $requete->fetchAll();

echo "<pre>";
print_r($utilisateurs);
echo "</pre>";
echo "Le premier de la liste est " . $utilisateurs[0]["prenom"] . " " . $utilisateurs[0]["nom"] . ".<br>";
echo "Le troisième de la liste est " . $utilisateurs[2]["prenom"] . ".<br>";
echo "Le dernier de la liste est " . $utilisateurs[7]["prenom"] . " " . $utilisateurs[7]["nom"] . "<br>" ;
foreach ($utilisateurs as $u) {
    echo $u["prenom"] . " " . $u["nom"] . "<br>";
}