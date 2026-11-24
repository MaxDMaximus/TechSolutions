<nav> 
    <table class="tablenav">
        <tr>
            <?php if (isset($_SESSION["id"])) { ?>
            <td class="tdmenulogo"><a href="index.php"><img src="images/TechSolutions.png" alt="TechSolutions"></img></a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Actualités.php">Actualités</a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Contact.php">Contact</a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Entreprise.php">Entreprise</a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Services.php">Services</a></td>
            <td class="tdconnexion"><a class="lienmenu" href="Connexion.php">Espace salariés</a></td>
            <td class="tdconnexion"><a class="lienmenu" href="Deconnexion.php">Se déconnecter</a></td>
            <?php } else { ?>
            <td class="tdmenulogo"><a href="index.php"><img src="images/TechSolutions.png" alt="TechSolutions"></img></a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Actualités.php">Actualités</a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Contact.php">Contact</a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Entreprise.php">Entreprise</a></td>
            <td class="tdmenugauche"><a class="lienmenu" href="Services.php">Services</a></td>
            <td class="tdconnexion"><a class="lienmenu" href="Connexion.php">Espace salariés</a></td>
            <?php } ?>
        </tr>
    </table>
</nav>