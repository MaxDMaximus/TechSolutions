<?php
session_start();

// Seul l'administrateur peut supprimer un compte : la page se protège elle-même
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit;
}
if ($_SESSION["role"] != "admin") {
    header("Location: espace.php");
    exit;
}

require "inc/bdd.php";

// Le numéro (id) du compte à supprimer arrive par le formulaire caché
$id = $_POST["id"];

$requete = $pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
$requete->execute([$id]);

// Retour à la liste, qui s'affiche sans le compte supprimé
header("Location: utilisateurs.php");
exit;