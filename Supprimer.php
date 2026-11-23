<?php
require "inc/bdd.php";
require "inc/verif-admin.php";

// Le numéro (id) du compte à supprimer arrive par le formulaire caché
$id = $_POST["id"];
if ($id == 1) {
    echo "Erreur, vous ne pouvez pas vous auto supprimer!";
} else {
    $requete = $pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
    $requete->execute([$id]);

    // Retour à la liste, qui s'affiche sans le compte supprimé
    header("Location: utilisateurs.php");
    exit;
}
?>