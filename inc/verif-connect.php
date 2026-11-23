<?php
// Page réservée aux personnes connectées
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit;
}
?>