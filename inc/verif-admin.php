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
?>